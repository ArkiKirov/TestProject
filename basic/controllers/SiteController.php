<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\Home;
use yii\db\ActiveRecord;
use app\models\SignupForm;
use app\models\UserIdentity;
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }
    public function actionHome($news = 'under')
    {
        $model = new Home();
        $this->layout = "def";
        return $this->render('home', ['model' => $model]);
    }
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
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
    public function getNewId(){
        return end(Yii::$app->db->createCommand('SELECT id FROM user')->queryAll())['id'] + 1;
    }
    public function actionSignup(){
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        
        $model = new SignupForm();
        if($model->load(\Yii::$app->request->post()) && $model->validate()){
            $user =  new UserIdentity();
            $user->id = $this->getNewId();
            $user->auth_key = "auth_key";
            $user->access_token	= "access_token";
            $user->first_name = $model->first_name;
            $user->last_name = $model->last_name;
            $user->username = $model->username;
            $user->password = md5($model->password);
        
        if($user->save()){
            \Yii::$app->user->login($user);
            return $this->goHome();
        } else {
            var_dump($this->getNewId());
        }
    }
        return $this->render('signup', compact('model'));
    }
    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionNeed(){
        return $this->render('need');
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
