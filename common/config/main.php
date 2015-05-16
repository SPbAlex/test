<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'bootstrap' => ['gii', 'debug'],
    'modules' => [
        'gii' => 'yii\gii\Module',
        'debug' => [
            'class' => 'yii\debug\Module'
        ]
    ],

    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
