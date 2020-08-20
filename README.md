# Scaffold Backend Laravel 7.24
Integration with JWT
# Header authenticated
    {Authorization: "bearer yJ0eXAiOiJKV1........"}
Manage Upload Files in: public/uploads
# Api Endpoints
    GET:  /api/test
    POST: /api/register
        fields:{
            name:"Name Example",
            email: "email@email.com",
            password: "12345678",
            password_confirmation: "12345678"
        }
    POST: /api/login
        fields:{
            email: "email@email.com",
            password: "12345678"
        }
    authenticate:
        POST: /api/upload
            fields:{
                image: File
            }
        Roles:{
            Index GET: /api/roles
            Store POST: /api/roles
                fields:{
                    name: "Name"
                }
            Show GET: /api/roles/{id}
            Update PUT: /api/roles/{id}
                Headers:{
                    'Content-Type':'application/x-www-form-urlencoded'
                }
                fields:{
                    name: "Name"
                }
            Destroy DELETE: /api/roles/{id}
        }

# Run:
    Copy .env.example to .env
    Config BD

    php artisan migrate
    php artisan db:seed
    php artisan serve