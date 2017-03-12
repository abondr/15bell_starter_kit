<?php

namespace frontend\controllers;

use yii\web\Controller;
use Yii;

class BuyerController extends Controller {

    public function __construct($id, $module, $config = array()) {
        parent::__construct($id, $module, $config);
        Yii::$app->view->params['customMenu'] = [
            ['label' => Yii::t('frontend', 'HOME'), 'url' => ['/site/index'],
                'active' => false],
            ['label' => Yii::t('frontend', 'SEARCH PROPERTY'), 'url' => ['/buyer/search-property'],
                'active' => false,
            ],
            ['label' => Yii::t('frontend', 'REGISTER'), 'url' => ['/user/sign-in/signup'], 'visible'=>Yii::$app->user->isGuest,'active'=>false],
            ['label' => Yii::t('frontend', 'LOGIN'),
                'url' => ['/user/sign-in/login'],
                'visible' => Yii::$app->user->isGuest,
                'active' => false, 'options' => ['class' => 'last']],
            [
                'label' => Yii::t('frontend', 'LOGOUT'),
                'url' => ['/user/sign-in/logout'],
                'visible'=>!Yii::$app->user->isGuest,
                'linkOptions' => ['data-method' => 'post'],
                'active' => false, 'options' => ['class' => 'last']
            ]
        ];
    }

    public function actionIndex() {
        return $this->render('index');
    }
    public function actionSearchProperty() {
        echo "<hr>blank";
    }

}
