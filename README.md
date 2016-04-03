TEST
____

REQUIREMENTS
------------

The minimum requirement by this project template that your Web server supports PHP 5.4.0.


INSTALLATION
------------

### Install from an Archive File

Extract the archive file downloaded to a directory named `test` that is directly under the Web root.

CONFIGURATION
-------------

### Database

Edit the file `config/db.php` with real data, for example:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=test_kerja',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
];
```
Table 
employee (`id_employee`, `first_name`, `last_name`, `email`, `phone`, `salary`)
for detail check in model employee
login (admin/admin) -> username does not come from database

**NOTES:**
- Yii won't create the database for you, this has to be done manually before you can access it.
- Check and edit the other files in the `config/` directory to customize your application as required.
- Refer to the README in the `tests` directory for information specific to basic application tests.
