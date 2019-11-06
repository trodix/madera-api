# Data Model

## Product

### GET Product

```
{
    "id": 76,
    "reference": "PD-5DA30EA366250",
    "name": "Poudlard",
    "projects": [
        "/api/projects/59"
    ]
}
```

## Customer

### GET Customer

```
{
    "id": 54,
    "reference": "CU-5DA30EA35BC05",
    "lastname": "Dupont",
    "firstname": "Francis",
    "phone": "0669696969",
    "email": "f.dupont@gmail.com",
    "address": "4 Rue de la poupée qui tousse",
    "zipcode": "21000",
    "city": "Dijon",
    "country": "France",
    "projects": [
        {
            "id": 57,
            "name": "Cabane normande",
            "reference": "PR-5DA30EA3CF6BB",
            "createdAt": "2019-10-13T11:46:43+00:00",
            "updatedAt": "2019-10-13T11:46:43+00:00",
            "quotations": [
                {
                    "id": 23,
                    "state": "WAITING",
                    "createdAt": "2019-10-13T11:46:44+00:00",
                    "updatedAt": "2019-10-13T11:46:44+00:00"
                }
            ],
            "user": {
                "id": 54,
                "email": "john.doe@madera.com",
                "lastname": "Doe",
                "firstname": "John"
            },
            "products": [
                {
                    "id": 74,
                    "reference": "PD-5DA30EA3661A2",
                    "name": "Vinteau"
                }
            ]
        },
        {
            "id": 58,
            "name": "Bureaux boisés de campagne",
            "reference": "PR-5DA30EA3E5D0D",
            "createdAt": "2019-10-13T11:46:43+00:00",
            "updatedAt": "2019-10-13T11:46:43+00:00",
            "quotations": [],
            "user": {
                "id": 54,
                "email": "john.doe@madera.com",
                "lastname": "Doe",
                "firstname": "John"
            },
            "products": [
                {
                    "id": 75,
                    "reference": "PD-5DA30EA36621D",
                    "name": "Chatelet"
                }
            ]
        }
    ],
    "createdAt": "2019-10-13T11:46:43+00:00",
    "updatedAt": "2019-10-13T11:46:43+00:00"
},
```

## Project

## GET Project

```
{
    "id": 56,
    "name": "projet de test !",
    "reference": "PR-5DA2429114200",
    "customer": {
        "id": 53,
        "reference": "CU-5DA2429043D6C",
        "lastname": "Durand",
        "firstname": "Kévin",
        "phone": "0102036325",
        "email": "kevin.durand@gmail.com",
        "address": "4 rue du poulailler",
        "zipcode": "545ssz5",
        "city": "Sydney",
        "country": "Australie",
        "createdAt": "2019-10-12T21:16:00+00:00",
        "updatedAt": "2019-10-12T21:16:00+00:00"
    },
    "createdAt": "2019-10-12T21:16:01+00:00",
    "updatedAt": "2019-10-12T21:16:01+00:00",
    "quotations": [
        {
            "id": 22,
            "state": "WAITING",
            "createdAt": "2019-10-12T21:16:02+00:00",
            "updatedAt": "2019-10-12T21:16:02+00:00"
        }
    ],
    "user": {
        "id": 52,
        "email": "john.doe@madera.com",
        "lastname": "Doe",
        "firstname": "John"
    },
    "products": []
}
```

## Quotation

### GET Quotation

```
{
    "id": 23,
    "state": "WAITING",
    "createdAt": "2019-10-13T11:46:44+00:00",
    "updatedAt": "2019-10-13T11:46:44+00:00",
    "project": {
        "id": 57,
        "name": "Cabane normande",
        "reference": "PR-5DA30EA3CF6BB",
        "customer": {
            "id": 54,
            "reference": "CU-5DA30EA35BC05",
            "lastname": "Dupont",
            "firstname": "Francis",
            "phone": "0669696969",
            "email": "f.dupont@gmail.com",
            "address": "4 Rue de la poupée qui tousse",
            "zipcode": "21000",
            "city": "Dijon",
            "country": "France",
            "createdAt": "2019-10-13T11:46:43+00:00",
            "updatedAt": "2019-10-13T11:46:43+00:00"
        },
        "createdAt": "2019-10-13T11:46:43+00:00",
        "updatedAt": "2019-10-13T11:46:43+00:00",
        "user": {
            "id": 54,
            "email": "john.doe@madera.com",
            "lastname": "Doe",
            "firstname": "John"
        },
        "products": [
            {
                "id": 74,
                "reference": "PD-5DA30EA3661A2",
                "name": "Vinteau"
            }
        ]
    }
}
```

## User

### GET User

```
{
    "id": 54,
    "email": "john.doe@madera.com",
    "roles": [
        "ROLE_COMMERCIAL",
        "ROLE_USER"
    ],
    "lastname": "Doe",
    "firstname": "John",
    "projects": [
        {
            "id": 57,
            "name": "Cabane normande",
            "reference": "PR-5DA30EA3CF6BB",
            "customer": "/api/customers/54",
            "createdAt": "2019-10-13T11:46:43+00:00",
            "updatedAt": "2019-10-13T11:46:43+00:00",
            "quotations": [
                {
                    "id": 23,
                    "state": "WAITING",
                    "createdAt": "2019-10-13T11:46:44+00:00",
                    "updatedAt": "2019-10-13T11:46:44+00:00"
                }
            ],
            "products": [
                {
                    "id": 74,
                    "reference": "PD-5DA30EA3661A2",
                    "name": "Vinteau"
                }
            ]
        },
        {
            "id": 58,
            "name": "Bureaux boisés de campagne",
            "reference": "PR-5DA30EA3E5D0D",
            "customer": "/api/customers/54",
            "createdAt": "2019-10-13T11:46:43+00:00",
            "updatedAt": "2019-10-13T11:46:43+00:00",
            "quotations": [],
            "products": [
                {
                    "id": 75,
                    "reference": "PD-5DA30EA36621D",
                    "name": "Chatelet"
                }
            ]
        },
        {
            "id": 59,
            "name": "Le domaine de Hagrid",
            "reference": "PR-5DA30EA3E62CB",
            "customer": "/api/customers/55",
            "createdAt": "2019-10-13T11:46:43+00:00",
            "updatedAt": "2019-10-13T11:46:43+00:00",
            "quotations": [],
            "products": [
                {
                    "id": 75,
                    "reference": "PD-5DA30EA36621D",
                    "name": "Chatelet"
                },
                {
                    "id": 76,
                    "reference": "PD-5DA30EA366250",
                    "name": "Poudlard"
                }
            ]
        }
    ]
}
```
