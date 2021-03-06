<?php

namespace frontend\controllers;

use Yii;
use frontend\models\ContactForm;
use common\models\ContactUs;
use yii\web\Controller;

/**
 * Site controller
 */
class SiteController extends Controller {

    /**
     * @inheritdoc
     */
    private $_menu;

//    public function __construct() {
//        Yii::$app->view->params['customMenu'] = [
//            ['label' => Yii::t('frontend', 'Home'), 'url' => ['/site/index']]
//        ];
//    }
    public function __construct($id, $module, $config = array()) {
        parent::__construct($id, $module, $config);
        Yii::$app->view->params['customMenu'] = [
            ['label' => Yii::t('frontend', 'HOME'), 'url' => ['/site/index'], 'active' => false],
            ['label' => Yii::t('frontend', 'BUYERS'), 'url' => ['/buyer/index', 'active' => false]],
            ['label' => Yii::t('frontend', 'SELLERS'), 'url' => ['/seller/index', 'active' => false]],
            ['label' => Yii::t('frontend', 'LESSEE'), 'url' => ['/lessee/index', 'active' => false]],
            ['label' => Yii::t('frontend', 'LOGIN'),
                'url' => ['/user/sign-in/login'],
                'visible' => Yii::$app->user->isGuest,
                'active' => false, 'options' => ['class' => 'last']],
            [
                'label' => Yii::t('frontend', 'LOGOUT'),
                'url' => ['/user/sign-in/logout'],
                'visible' => !Yii::$app->user->isGuest,
                'linkOptions' => ['data-method' => 'post'],
                'active' => false, 'options' => ['class' => 'last']
            ]
        ];
    }

    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction'
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null
            ],
            'set-locale' => [
                'class' => 'common\actions\SetLocaleAction',
                'locales' => array_keys(Yii::$app->params['availableLocales'])
            ]
        ];
    }

    public function actionIndex() {
        $contact = new ContactUs;
        return $this->render('index', ['contact' => $contact]);
    }

    public function actionContact() { //print_r(Yii::$app->request->post());die;
        $model = new ContactUs();
        $model->full_name = Yii::$app->request->post('full_name');
        $model->email = Yii::$app->request->post('email');
        $model->contact_number = Yii::$app->request->post('contact_number');
        $model->message = Yii::$app->request->post('message');
                
               
        if ($model->validate()) {
            if ($model->contact(Yii::$app->params['adminEmail'])) {
                Yii::$app->getSession()->setFlash('alert', [
                    'body' => Yii::t('frontend', 'Thank you for contacting us. We will respond to you as soon as possible.'),
                    'options' => ['class' => 'alert-success']
                ]);
                return $this->refresh();
            } else {
                Yii::$app->getSession()->setFlash('alert', [
                    'body' => \Yii::t('frontend', 'There was an error sending email.'),
                    'options' => ['class' => 'alert-danger']
                ]);
            }
        }

        return $this->render('contact', [
                    'model' => $model,
                    'menu' => $this->_menu
        ]);
    }

}
