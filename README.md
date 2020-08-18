# Como utitilizar

1. Clone o repositório usando o comando:

   git clone https://github.com/sebet89/login_captcha_laravel.git

2. Entre na pasta login_captcha_laravel e baixe os pacotes do composer

   composer update
   
3. Configure o seu banco no arquivo .env

4. Crie o banco com nome do "DB_DATABASE" que esta no .env
   
5. Criando tabelas no banco

    php artisan migrate:fresh --seed

6. Rode o servidor

   php artisan serve

7. Acesse o sistema

   http://localhost:8000/ (provavelmente)
