# madera-api

> API de l'application madera

## Dependencies

[API Platform](https://api-platform.com/docs/)

[LexikJWTAuthenticationBundle](https://github.com/lexik/LexikJWTAuthenticationBundle)

[NelmioCorsBundle](https://github.com/nelmio/NelmioCorsBundle)

## Getting started

### Install dependencies

- `composer install`

### Configure environment vars

- Create .env.dev.local
- Add vars to override
- Add ssl passphrase

### Generate ssl keys

- `openssl genpkey -out config/jwt/private.pem -aes256 -algorithm rsa -pkeyopt rsa_keygen_bits:4096`

- `openssl pkey -in config/jwt/private.pem -out config/jwt/public.pem -pubout`

### Run the server

- `php bin/console server:run`

### Go to <http://localhost:8000/api/>
