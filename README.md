# docker-laravel

## How to use

### Create New Laravel Project

```
git clone git@github.com:kazukinakama/docker-laravel.git
cd docker-laravel
mkdir src
docker compose up -d --build
docker compose exec php composer create-project --prefer-dist laravel/laravel .
```
