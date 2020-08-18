# Como utitilizar

1. Clone o repositório usando o comando:

   git clone https://github.com/sebet89/login_captcha_laravel.git

2. Entre na pasta login_captcha_laravel e baixe os pacotes do composer

   composer update
   
3. Criando tabelas no banco (precisa estar com Apache ligado)

    php artisan migrate:fresh --seed

4. Rode o servidor

   php artisan serve

5. Acesse o sistema

   http://localhost:8000/ (provavelmente)
