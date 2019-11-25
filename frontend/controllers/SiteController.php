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
use common\models\personal;
use common\models\User;
use common\models\education;
use common\models\skill;


/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
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
 public function actionIndex()
    {
        // $id = Yii::$app->user->identity->id;
        $personalModel = personal::find()->one();
      
        return $this->render('index', [
            'personalModel' => $personalModel 
        ]);

    }
  public function actionPort()
    {
       
        return $this->render('port');
    }
 public function actionTeam()
    {
        
        return $this->render('team');
    }
    public function actionExperience()
    {
        
        return $this->render('experience');
    }
    public function actionAwards()
    {
        
        return $this->render('awards');
    }
    public function actionContact()
    {
        $personalModel = personal::find()->one();
        
        return $this->render('contact',[
            'personalModel' => $personalModel 
        ]);
    }
     public function actionEducation()
    {       
        $educationModel = education::find()->one();
                
        return $this->render('education',[
            'educationModel' => $educationModel
        ]);

    }
     public function actionSkill()
    {   
        $skillModel = skill::find()
        ->where(['id' =>1])
        ->orderBy('name')
        ->one();
        $skillModel2 = skill::find()
        ->where(['id' =>2])
        ->orderBy('name')
        ->one();
        $skillModel3 = skill::find()
        ->where(['id' =>3])
        ->orderBy('name')
        ->one();
        $skillModel4 = skill::find()
        ->where(['id' =>4])
        ->orderBy('name')
        ->one();
        $skillModel5 = skill::find()
        ->where(['id' =>5])
        ->orderBy('name')
        ->one();
      
    
        return $this->render('skill',[
            'skillModel' => $skillModel,
            'skillModel2' => $skillModel2,
            'skillModel3' => $skillModel3,
            'skillModel4' => $skillModel4,
            'skillModel5' => $skillModel5, 
           
            
            ]);
    }
    public function actionInterests()
    {
        
        return $this->render('interests');
    } 
    
/*
     * Logs in a user.
     *
     * @return mixed
     */
 public function actionLogin()
    {
        // echo"contact";
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

    /*
     * Logs out the current user.
     *
     * @return mixed
     */
     public function actionLogout()
     {
         Yii::$app->user->logout();

         return $this->goHome();
    }

    // /**
    //  * Displays contact page.
    //  *
    //  * @return mixed
    //  */
    // public function actionContact()
    // {
    //     $model = new ContactForm();
    //     if ($model->load(Yii::$app->request->post()) && $model->validate()) {
    //         if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
    //             Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
    //         } else {
    //             Yii::$app->session->setFlash('error', 'There was an error sending your message.');
    //         }

    //         return $this->refresh();
    //     } else {
    //         return $this->render('contact', [
    //             'model' => $model,
    //         ]);
    //     }
    // }



    // /**
    //  * Signs user up.
    //  *
    //  * @return mixed
    //  */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->goHome();
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    // /**
    //  * Requests password reset.
    //  *
    //  * @return mixed
    //  */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    // /**
    //  * Resets password.
    //  *
    //  * @param string $token
    //  * @return mixed
    //  * @throws BadRequestHttpException
    //  */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    // /**
    //  * Verify email address
    //  *
    //  * @param string $token
    //  * @throws BadRequestHttpException
    //  * @return yii\web\Response
    //  */
    public function actionVerifyEmail($token)
    {
        try {
            $model = new VerifyEmailForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
        if ($user = $model->verifyEmail()) {
            if (Yii::$app->user->login($user)) {
                Yii::$app->session->setFlash('success', 'Your email has been confirmed!');
                return $this->goHome();
            }
        }

        Yii::$app->session->setFlash('error', 'Sorry, we are unable to verify your account with provided token.');
        return $this->goHome();
    }

    // /**
    //  * Resend verification email
    //  *
    //  * @return mixed
    //  */
    public function actionResendVerificationEmail()
    {
        $model = new ResendVerificationEmailForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                return $this->goHome();
            }
            Yii::$app->session->setFlash('error', 'Sorry, we are unable to resend verification email for the provided email address.');
        }

        return $this->render('resendVerificationEmail', [
            'model' => $model
        ]);
    }
}
