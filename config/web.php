<?php

$params = require(__DIR__ . '/params.php');
$db = require(__DIR__ . '/db.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'xZfu8adVpPysKty-nTJATS-vTo0J_LL6',
        ],
		
		
		'authManager' => [
        'class' => 'yii\rbac\DbManager'
        ],
		
		'i18n' => [  
        'translations' => [  
            '*' => [  
                'class' => 'yii\i18n\PhpMessageSource',  
                'basePath' => '@app/messages', // if advanced application, set @frontend/messages  
                'sourceLanguage' => 'en',  
                'fileMap' => [  
                    //'main' => 'main.php',  
                ],  
            ],  
        ],  
    ],  
		
		
		
		
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        /*
		'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
		*/
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
		
        'mailer' => [
        'class' => 'yii\swiftmailer\Mailer',
        'viewPath' => '@app/mailer',
        'useFileTransport' => false,
        'transport' => [
            'class' => 'Swift_SmtpTransport',
            'host' => 'smtp.qq.com',
            'username' => '670423194@qq.com',
            'password' => 'yxytqscztrkebcid',
            'port' => '587',
            'encryption' => 'tls',
            ],
			
	   'messageConfig'=>[  
       'charset'=>'UTF-8',  
       'from'=>['670423194@qq.com'=>'admin']  
       ],  
	   
	   
    ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
    ],
	
	

	
	
	'modules' => [
        'user' => [
            'class' => 'dektrium\user\Module',
            'confirmWithin' => 21600,
            'cost' => 12,
            'admins' => ['admin']
        ],
		
		
		
		
		'admin' => [  
        'class' => 'mdm\admin\Module',  
  
        'layout' => 'left-menu', // it can be '@path/to/your/layout'.  
        /**/  
        'controllerMap' => [  
            'assignment' => [  
                'class' => 'mdm\admin\controllers\AssignmentController',  
                'userClassName' => 'app\models\User',  
                'idField' => 'id'  
            ]  
        ],  
        'menus' => [  
            'assignment' => [  
                'label' => 'Grand Access' // change label  
            ],  
            //'route' => null, // disable menu route  
        ]  
    ], 



'as access' => [
        'class' => 'mdm\admin\components\AccessControl',
        'allowActions' => [
            'site/*',
            'admin/*',
            'some-controller/some-action',
            // The actions listed here will be allowed to everyone including guests.
            // So, 'admin/*' should not appear here in the production, of course.
            // But in the earlier stages of your development, you may probably want to
            // add a lot of actions here until you finally completed setting up rbac,
            // otherwise you may not even take a first step.
        ]
    ],










	
    'debug' => [  
        'class' => 'yii\debug\Module',  
    ],  
			
		
    ],
	
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
