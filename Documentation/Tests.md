# Tests

## API tests

### Setup

Location `/src/tests`

All tests are created with postman

There is two files:

* l4pc-madera-test.postman_environment.json

This file define all variables required by postman for testing in test environment

* Madera.postman_collection.json

This file contains all tests written by postman

### Runner

Run all tests via postman GUI or use the newman cli tool

To install the newman cli tool:

`npm install -g newman`

To run all tests:

`newman run ./tests/Madera.postman_collection.json --environment ./tests/l4pc-madera-test.postman_environment.json -r cli`
