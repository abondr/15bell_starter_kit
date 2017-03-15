<?php
$config = [
    'components' => [
        'assetManager' => [
            'class' => 'yii\web\AssetManager',
            'linkAssets' => false,
            'appendTimestamp' => YII_ENV_DEV
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => false,
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.gmail.com',
                'username' => '',//'full_email',
                'password' => '',//'password_to_email',
                'port' => '25',
            ],
    ]
        ],
    'as locale' => [
        'class' => 'common\behaviors\LocaleBehavior',
        'enablePreferredLanguage' => true
    ]
];

/*if (YII_DEBUG) {
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        'allowedIPs' => ['127.0.0.1', '::1', '192.168.33.1', '172.17.42.1'],
    ];
}*/

if (YII_ENV_DEV) {
    $config['modules']['gii'] = [
        'allowedIPs' => ['127.0.0.1', '::1', '192.168.33.1', '172.17.42.1'],
    ];
}


return $config;
