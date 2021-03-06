# API

## API Endpoints

**See the API documentation with Swagger UI**

[Anonnymous] **GET** `/v1`

**API Authenticated ressources**

[Authenticated] **ANY** `/v1/**`

## Authentication

### **Get a new JWT token**

[Anonnymous] **POST**|**GET** `/v1/login_check`

**Request body**

```json
{
  "username": "YOUR_USERNAME",
  "password": "YOUR_PASSWORD"
}
```

**Response body**

```json
{
  "token": "YOUR_TOKEN",
  "user": {
    "id": 9
  },
  "refresh_token": "YOUR_REFRESH_TOKEN"
}
```

### **Refresh a token**

[Authenticated] **POST**|**GET** `/v1/token/refresh`

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
  "user": {
    "id": 9
  },
  "refresh_token": "YOUR_REFRESH_TOKEN"
}
```

## Send an authenticated request

1. Get a JWT token at `/v1/login_check` with your credentials
2. Set the **Autorization** header with: `Bearer YOUR_TOKEN`
3. Request the ressource that you want at `/v1/**`

**With Swagger UI**

- Click on the **Authorize** button
- Set your token from step 1 with the following patern: `Bearer YOUR_TOKEN`
- Send your request from Swagger UI

## Refresh the token

If your token has expired, you will not be able to send a authenticated request to the API.

In order to refresh your token, send a request to `/v1/token/refresh` or request a new one at `/v1/login_check`.

## Filters

- Get an archived entity `/v1/entity?exists[deletedAt]=true`
- Get a not archived entity `/v1/entity?exists[deletedAt]=false`
