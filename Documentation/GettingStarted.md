### Install dependencies

- `composer install`

### Configure environment vars

- Create .env.dev.local
- Add vars to override
- Add ssl passphrase

### Generate ssl keys

- `mkdir -p config/jwt`

- `openssl genpkey -out config/jwt/private.pem -aes256 -algorithm rsa -pkeyopt rsa_keygen_bits:4096`

- `openssl pkey -in config/jwt/private.pem -out config/jwt/public.pem -pubout`

### Run the server

- `php bin/console server:run`

### Create Database (the first time)

- `php bin/console doctrine:database:create`
- `php bin/console doctrine:migrations:migrate`

### Update Database (for each update)

- `php bin/console make:migration`
- `php bin/console doctrine:migrations:migrate`

### Load fixtures

This will create a new user and dummy data

- `php bin/console doctrine:fixtures:load`

Default admin user created:

- username: `admin@madera.com`
- password: `madera2019`

### Go to <http://localhost:8000/v1>