# Scaffold Backend Laravel 7.24
Integracion with JWT
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
                image: file
            }
        
  