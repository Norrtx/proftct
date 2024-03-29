<?php

namespace backend\controllers;

use Yii;
use common\models\skill;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\User;
/**
 * SkillController implements the CRUD actions for skill model.
 */
class SkillController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all skill models.
     * @return mixed
     */
    public function actionIndex()
    {    $id = Yii::$app->user->identity->id;
        $dataProvider = new ActiveDataProvider([
            'query' => skill::find()->where(['user_id'=>$id])
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single skill model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new skill model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    { $id = Yii::$app->user->identity->id;
      
        $request = Yii::$app->request;
        if ($request->isPost) {
    
           $n=$request->post('namem');
           $s=$request->post('score');

         

            $skill = new skill();      
            
            $skill->name = $n;
            $skill->score = $s;
            $skill->user_id = $id;
            $skill->save();
        }
        $model = new skill();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing skill model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {   
        $user_id = Yii::$app->user->identity->id;
        $model = $this->findModel($id);
        $model ->user_id = $user_id;
        $request = Yii::$app->request;
        if ($request->isPost) {
            $model->user_id = $user_id;
            $model->save();
        }
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }
        

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing skill model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the skill model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return skill the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = skill::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
