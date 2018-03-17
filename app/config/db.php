<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=u4-site1',
    'username' => 'u4',
    'password' => 'QMX5symUxPf_r7S4H',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    'enableSchemaCache' => true,
    'schemaCacheDuration' => 2592000,
    'queryCacheDuration' => 86400,
    'emulatePrepare' => true,
    'tablePrefix' => 'tbl_',
    'enableLogging' => YII_ENV_DEV,
    'enableProfiling' => YII_ENV_DEV,
];
