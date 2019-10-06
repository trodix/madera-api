# API

## API Endpoints

**See the API documentation with Swagger UI**

[Anonnymous] **GET** `/api`

**API Authenticated ressources**

[Authenticated] **ANY** `/api/**`

## Authentication

### **Get a new JWT token**

[Anonnymous] **POST**|**GET** `/api/login_check`

**Request body**

```json
{
  "_username": "YOUR_USERNAME",
  "_password": "YOUR_PASSWORD"
}
```

**Response body**

```json
{
  "token": "YOUR_TOKEN",
  "refresh_token": "YOUR_REFRESH_TOKEN"
}
```

### **Refresh a token**

[Authenticated] **POST**|**GET** `/api/token/refresh`

**Request body**

```json
{
  "refresh_token": "YOUR_REFRESH_TOKEN"
}
```

**Response body**

```json
{
  "token": "YOUR_TOKEN",
  "refresh_token": "YOUR_REFRESH_TOKEN"
}
```

## Send an authenticated request

1. Get a JWT token at `/api/login_check` with your credentials
2. Set the **Autorization** header with: `Bearer YOUR_TOKEN`
3. Request the ressource that you want at `/api/**`

**With Swagger UI**

- Click on the **Authorize** button
- Set your token from step 1 with the following patern: `Bearer YOUR_TOKEN`
- Send your request from Swagger UI

## Refresh the token

If your token has expired, you will not be able to send a authenticated request to the API.

In order to refresh your token, send a request to `/api/token/refresh` or request a new one at `/api/login_check`.