# Data Model

## Customer

### GET Customer

```
{
    "id": 3,
    "reference": "CU-5DFE812717EC5",
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
            "id": 4,
            "name": "Cabane normande",
            "reference": "PR-5DFE8127A5742",
            "createdAt": "2019-12-21T20:31:35+00:00",
            "updatedAt": "2019-12-21T20:31:35+00:00",
            "quotations": [
                {
                    "id": 4,
                    "state": "WAITING",
                    "createdAt": "2019-12-21T20:31:35+00:00",
                    "updatedAt": "2019-12-21T20:31:35+00:00"
                }
            ],
            "users": [
                {
                    "id": 4,
                    "email": "john.doe@madera.com",
                    "lastname": "Doe",
                    "firstname": "John"
                }
            ],
            "modules": [
                "/v1/modules/7"
            ]
        },
        {
            "id": 5,
            "name": "Bureaux boisés de campagne",
            "reference": "PR-5DFE8127A76C0",
            "createdAt": "2019-12-21T20:31:35+00:00",
            "updatedAt": "2019-12-21T20:31:35+00:00",
            "quotations": [
                {
                    "id": 5,
                    "state": "WAITING",
                    "createdAt": "2019-12-21T20:31:35+00:00",
                    "updatedAt": "2019-12-21T20:31:35+00:00"
                }
            ],
            "users": [
                {
                    "id": 4,
                    "email": "john.doe@madera.com",
                    "lastname": "Doe",
                    "firstname": "John"
                }
            ],
            "modules": []
        }
    ],
    "createdAt": "2019-12-21T20:31:35+00:00",
    "updatedAt": "2019-12-21T20:31:35+00:00"
}
```

## Project

## GET Project

```
{
    "id": 4,
    "name": "Cabane normande",
    "reference": "PR-5DFE8127A5742",
    "travelCost": 139.95,
    "vat": 20,
    "customer": {
        "id": 3,
        "reference": "CU-5DFE812717EC5",
        "lastname": "Dupont",
        "firstname": "Francis",
        "phone": "0669696969",
        "email": "f.dupont@gmail.com",
        "address": "4 Rue de la poupée qui tousse",
        "zipcode": "21000",
        "city": "Dijon",
        "country": "France",
        "createdAt": "2019-12-21T20:31:35+00:00",
        "updatedAt": "2019-12-21T20:31:35+00:00"
    },
    "createdAt": "2019-12-21T20:31:35+00:00",
    "updatedAt": "2019-12-21T20:31:35+00:00",
    "quotations": [
        {
            "id": 4,
            "state": "WAITING",
            "createdAt": "2019-12-21T20:31:35+00:00",
            "updatedAt": "2019-12-21T20:31:35+00:00"
        }
    ],
    "users": [
        {
            "id": 4,
            "email": "john.doe@madera.com",
            "lastname": "Doe",
            "firstname": "John"
        }
    ],
    "modules": [
        {
            "id": 7,
            "reference": "MOD-5DFE812725A14",
            "name": "Mur intérieur - Placo - Laine de roche",
            "usageUnit": "mm",
            "moduleRange": {
                "id": 3,
                "name": "Standard"
            },
            "moduleComponents": [
                "/v1/module_components/5"
            ]
        }
    ]
},
```

## Quotation

### GET Quotation

```
{
    "id": 4,
    "state": "WAITING",
    "createdAt": "2019-12-21T20:31:35+00:00",
    "updatedAt": "2019-12-21T20:31:35+00:00",
    "project": {
        "id": 4,
        "name": "Cabane normande",
        "reference": "PR-5DFE8127A5742",
        "travelCost": 139.95,
        "vat": 20,
        "customer": {
            "id": 3,
            "reference": "CU-5DFE812717EC5",
            "lastname": "Dupont",
            "firstname": "Francis",
            "phone": "0669696969",
            "email": "f.dupont@gmail.com",
            "address": "4 Rue de la poupée qui tousse",
            "zipcode": "21000",
            "city": "Dijon",
            "country": "France",
            "createdAt": "2019-12-21T20:31:35+00:00",
            "updatedAt": "2019-12-21T20:31:35+00:00"
        },
        "createdAt": "2019-12-21T20:31:35+00:00",
        "updatedAt": "2019-12-21T20:31:35+00:00",
        "users": [
            {
                "id": 4,
                "email": "john.doe@madera.com",
                "lastname": "Doe",
                "firstname": "John"
            }
        ],
        "modules": [
            "/v1/modules/7"
        ]
    }
}
```

## User

### GET User

```
{
    "id": 4,
    "email": "john.doe@madera.com",
    "roles": [
        "ROLE_COMMERCIAL",
        "ROLE_USER"
    ],
    "lastname": "Doe",
    "firstname": "John",
    "sites": [
        {
            "id": 6,
            "name": "Magasin de Mâcon",
            "address": "Boulevard Edwige",
            "zipcode": "71000",
            "city": "Mâcon",
            "country": "France"
        }
    ],
    "projects": [
        "/v1/projects/4",
        "/v1/projects/5",
        "/v1/projects/6"
    ]
}
```
