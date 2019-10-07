# madera-api

> API de l'application madera

## Dependencies

[API Platform](https://api-platform.com/docs/)

[LexikJWTAuthenticationBundle](https://github.com/lexik/LexikJWTAuthenticationBundle)

[JWTRefreshTokenBundle](https://github.com/markitosgv/JWTRefreshTokenBundle)

[NelmioCorsBundle](https://github.com/nelmio/NelmioCorsBundle)


## Getting started

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


### Update Database

- `php bin/console make:migration`
- `php bin/console doctrine:migrations:migrate`

### Load fixtures

- `php bin/console doctrine:fixtures:load` This will create new users

Default admin user:

- username: `admin@madera.com`
- password: `madera2019`

### Go to <http://localhost:8000/api/>

## Next step

### [See how to send authenticated request to the api](Documentation/Api.md)
