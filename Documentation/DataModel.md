# Data Model

## Customer

### GET Customer

```json
{
    "id": 2,
    "reference": "CU-5E1B632FD6AFA",
    "lastname": "Molotov",
    "firstname": "Dimitri",
    "phone": "0645253296",
    "email": "dimitri.molotov@gmail.com",
    "address": "4 Place du Soulié troué",
    "zipcode": "89000",
    "city": "Auxerre",
    "country": "France",
    "projects": [],
    "createdAt": "2020-01-12T18:19:27+00:00",
    "updatedAt": "2020-01-12T18:19:27+00:00"
}
```

## Project

## GET Project

```json
{
    "id": 3,
    "name": "Le domaine de Hagrid",
    "reference": "PR-5E1B633077537",
    "customer": {},
    "createdAt": "2020-01-12T18:19:28+00:00",
    "updatedAt": "2020-01-12T18:19:28+00:00",
    "quotations": [],
    "users": []
}
```

## Quotation

### GET Quotation

```json
{
    "id": 3,
    "reference": "QT-5E1B63307B787",
    "state": "VALIDATED",
    "createdAt": "2020-01-12T18:19:28+00:00",
    "updatedAt": "2020-01-12T18:20:08+00:00",
    "project": {},
    "modules": [],
    "travelCost": 139.95,
    "vat": 20,
    "deletedAt": "2020-01-12T18:20:10+00:00"
}
```

## User

### GET User

```json
{
    "id": 1,
    "email": "admin@madera.com",
    "roles": [],
    "lastname": null,
    "firstname": null,
    "sites": [],
    "projects": []
}
```
