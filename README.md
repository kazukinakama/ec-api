# laravel-docker

## How to use

### Create New Laravel Project

```
git clone git@github.com:kazukinakama/laravel-docker.git
cd laravel-docker
cp .env.example .env
docker compose up -d --build
docker compose exec php composer create-project --prefer-dist laravel/laravel .
```
