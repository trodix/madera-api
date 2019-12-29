# Logger

## Log the database activity

The logger is listening on a database events on DatabaseEventListener.php

Handled actions are:

* persist
* remove
* update

Logs are stored in `/var/logs/{env}.log`

### Log result

``` log
[2019-12-21 21:06:12] app.INFO: User 3 update the entity App\Entity\Module with ID 7 [] []
```

## Log rotation

**/!\ No file rotation is defined yet**
