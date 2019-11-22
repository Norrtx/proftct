<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use common\models\personal;
use common\models\education;
use common\models\skill;
use common\models\User;
/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout','index', 'personal','education','skill'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
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
    public function actionPersonal()
    {
        $id = Yii::$app->user->identity->id;
        $request = Yii::$app->request;
        if ($request->isPost) {
            
           $name=$request->post('namem');
           $mail=$request->post('mail');
           $des=$request->post('description');
           $link=$request->post('link');
           $city=$request->post('city');
           $state=$request->post('state');
           $zip=$request->post('zip');
            
           
            $personal = new personal();      
            
            $personal->name = $name;
            $personal->mail = $mail;
            $personal->discription = $des;
            $personal->link = $link;
            $personal->user_id = $id;
            $personal->state = $state;
            $personal->city = $city;
            $personal->zip = $zip;
            
            $personal->save();
        }
       
       return $this->render('personal');
    }
    public function actionEducation()
    {  
        $id = Yii::$app->user->identity->id;
     
        $request = Yii::$app->request;
        if ($request->isPost) {
    
           $n=$request->post('namem');
           $m=$request->post('Major');
           $g=$request->post('gpa');
           $d=$request->post('dete');
         
        //    $skillModel = personal::find()->all();
        //     print_r($skillModel);
        //  die();
            $education = new education();      
            
            $education->name = $n;
            $education->major = $m;
            $education->gpa = $g;
            $education->date = $d;
            $education->user_id = $id;
            $education->save();
        }
       
        return $this->render('education');
    }
    public function actionSkill()
    {
        


        return $this->render('skill');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
