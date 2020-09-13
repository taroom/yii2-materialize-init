<?php
namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class ElementController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionTable()
    {
        return $this->render('table');
    }

    public function actionDashboard()
    {
        return $this->render('dashboard');
    }

    public function actionUser()
    {
        return $this->render('user');
    }

    public function actionTypography()
    {
        return $this->render('typography');
    }

    public function actionIcons()
    {
        return $this->render('icons');
    }

    public function actionMap()
    {
        return $this->render('map');
    }

    public function actionNotifications()
    {
        return $this->render('notifications');
    }

    public function actionUpgrade()
    {
        return $this->render('upgrade');
    }
}
