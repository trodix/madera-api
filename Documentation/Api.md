# API

## Endpoints

**Get a new JWT token**

[Anonnymous] **POST** `/api/login_check`

**See the API documentation with Swagger UI**

[Anonnymous] **GET** `/api`

**API Authenticated ressources**

[Authenticated] **ANY** `/api/**`

## Send an authenticated request

1. Get a JWT token at `/api/login_check` with POST method
2. Request the ressource that you want at `/api/**`

**With Swagger UI**

- Click on the **Authorize** button
- Set your token from step 1 with the following patern: `Bearer YOUR_TOKEN`
- Send your request from Swagger UI