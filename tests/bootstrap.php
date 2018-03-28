<?php

// ensure we get report on all possible php errors
error_reporting(-1);

define('YII_ENABLE_ERROR_HANDLER', false);
define('YII_DEBUG', true);
$_SERVER['SCRIPT_NAME'] = '/' . __DIR__;
$_SERVER['SCRIPT_FILENAME'] = __FILE__;

require_once(__DIR__ . '/../vendor/autoload.php');
require_once(__DIR__ . '/../vendor/yiisoft/yii2-dev/framework/Yii.php');

Yii::setAlias('@yiiunit', __DIR__ . '/../vendor/yiisoft/yii2-dev/tests');
Yii::setAlias('@edgardmessias/unit/db/firebird', __DIR__);
Yii::setAlias('@edgardmessias/db/firebird', __DIR__ . '/../src');

require_once (__DIR__ . '/../vendor/yiisoft/yii2-dev/tests/compatibility.php');
require_once (__DIR__ . '/../vendor/yiisoft/yii2-dev/tests/TestCase.php');
