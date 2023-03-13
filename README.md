# Curso GRATUITO de Laravel 10.x

- :movie_camera: [Acesse o Curso](https://academy.especializati.com.br/curso/laravel-10-gratuito).


Links Úteis:

- :tada: [Saiba Mais](https://linktr.ee/especializati)

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
APP_NAME="Especializa Ti"
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


Acesse o projeto
[http://localhost:8989](http://localhost:8989)
