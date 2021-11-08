<p align="center">
Como executar o projeto
</p>

## Execute os comando a seguir montar o ambiente em sua maquina

```
    git clone https://github.com/mateusmlsv/ticto-test.git
    cd /ticto-test
    docker-compose up -d --build
    docker exec -it ticto_php /bin/bash
    compose install
    npm install
    php artisan migrate
    php artisan db:seed
```

## Acesse o projeto

Acesse o caminho [localhost](https://localhost) em seu navegador
PS.: tem que ser HTTPS pois está sendo usado SSL no container do NGINX

## Acesso o sistema

Ao executar a seeder foram criados dois usuários: admin e employee

admin:
    email: admin@hotmail.com
    password: password
employee:
    email: employee@hotmail.com
    password: password
