<div align="center">
<a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a>
</div>

# Laravel REST API with JWT Authentication

### Bônus: Insomnia Collection

![Android SDK](https://img.shields.io/badge/8.75-100000?label=Laravel&style=for-the-badge&logo=laravel&color=f20000)
![Android SDK](https://img.shields.io/badge/7.4-100000?label=PHP&style=for-the-badge&logo=php&color=007bff)
<a href="https://github.com/arturmedeiros/laravel-api-jwt-authentication/blob/e38558adcc82a2c3f371475e165cd4ce679eab2f/insomnia_api-laravel_jwt_authentication_collection.json" target="_blank">
<img src="https://img.shields.io/badge/Insomnia_Collection-555555?style=for-the-badge&logo=Insomnia">
</a>

## About

REST API project using Laravel framework. Ready-to-use User CRUD (Model and Controllers), in addition to the Authentication routes. Download the Insomnia Collection to test requests locally.

## ✅ Requirements
To use the project, you need to have some packages and starter packages on your computer.
See the standard requirements by [LARAVEL](https://laravel.com/docs/9.x/deployment#server-requirements):

- PHP >= 7.4
- BCMath PHP Extension
- Ctype PHP Extension
- cURL PHP Extension
- DOM PHP Extension
- Fileinfo PHP Extension
- JSON PHP Extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PCRE PHP Extension
- PDO PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension

## 🚀 Get started

### 1) Laravel dependencies installation

```shell
composer install
```

### 2) Configure .ENV file

Rename ".env.example" file to ".env" and configure your database data. 

```shell
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

### 3) Generate Keys

```shell
php artisan key:generate && php artisan jwt:secret
```

### 4) Run Migrations and User Factory

```shell
php artisan migrate --seed
```

### 5) Run project

```shell
php artisan serve
```

## 🧑🏻‍💻 Author

- [@arturmedeiros](https://www.github.com/arturmedeiros)


##📖 References

- [Laravel Framework](https://laravel.com)

- [JWT Token](https://jwt-auth.readthedocs.io/en/develop/laravel-installation/)

##⚖️ License

### MIT License

Copyright (c) 2022 @ARTURMEDEIROS - ARJOS.COM.BR

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
