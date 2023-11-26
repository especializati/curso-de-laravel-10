Figma
```sh
https://www.figma.com/file/QyssjRL3ZdEZ6H8Rbp86Up/Site-Xastre?type=design&node-id=28-5&mode=design&t=mmvkN4Zi3BiVfUIn-0
```
Trello
```sh
https://trello.com/b/brOnt0oG/main
```





## Passo a passo para rodar o projeto
Clone o projeto
```sh
git clone https://github.com/especializati/curso-de-laravel-10.git laravel-10
```
```sh
cd laravel-10/
```


Crie o Arquivo .env
```sh
cp .env.example .env
```


Atualize essas variáveis de ambiente no arquivo .env
```dosini
APP_NAME="Buffet"
APP_URL=http://localhost:8989

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=nome_que_desejar_db
DB_USERNAME=nome_usuario
DB_PASSWORD=senha_aqui

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379
```


Suba os containers do projeto
```sh
docker-compose up -d
```


Acesse o container
```sh
docker-compose exec app bash
```


Instale as dependências do projeto
```sh
composer install
```


Gere a key do projeto Laravel
```sh
php artisan key:generate
```

Use o Migrate
```sh
php artisan migrate
```



Acesse o projeto
[http://localhost:8989](http://localhost:8989)
