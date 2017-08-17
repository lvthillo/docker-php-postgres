# docker-php-postgres
```
$ docker-compose up -d
```
Access PHP app on http://localhost:80 and submit the form:

<img width="292"  alt="screen shot 2017-08-17 at 19 28 23" src="https://user-images.githubusercontent.com/14105387/29425231-ceab73aa-8382-11e7-9ec3-47b0b159d833.png">

Visit http://localhost:5050 
Default credentials are:
* username: pgadmin@mail.com
* password: mypassword

Add a connection:

<img width="300" alt="screen shot 2017-08-17 at 19 42 55" src="https://user-images.githubusercontent.com/14105387/29425677-6bbfbf06-8384-11e7-8734-7c27c6b70eec.png">

Check the data:

<img width="1435" alt="screen shot 2017-08-17 at 19 35 20" src="https://user-images.githubusercontent.com/14105387/29425357-432aa124-8383-11e7-9bcf-a4b10234be22.png">

The docker-compose.yaml is very flexible. By editing the enviroment variables inside the file you can define the following:
* POSTGRES_USER (default = dev)
* POSTGRES_PASSWORD (default = secret)
* POSTGRES_DB (default = db)
* HOST (default = postgres)
* DEFAULT_USER (default = pgadmin@mail.com)
* DEFAULT_PASSWORD (default = mypassword)
