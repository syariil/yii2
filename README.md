Installation
------------

1. clone repository

```
git clone https://github.com/syariil/yii2
```
2. add local file

```
php init
```

3. Install Requiretment

```
composer install
```

4. set database in common/config/main-local.php
```php
    ...
    'components' => [
        'db' => [
            'class' => \yii\db\Connection::class,
            'dsn' => 'mysql:host=localhost;dbname=name-database', // name database
            'username' => 'root', // username database
            'password' => '',   // password database
            'charset' => 'utf8',
        ],
        ....
    ],   
```

5. add table user to database
```
yii migrate
```


Done.
