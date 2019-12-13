<?php

namespace backend\controllers;

use Yii;
use common\models\Personal;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
/**
 * PersonalController implements the CRUD actions for Personal model.
 */
class PersonalController extends Controller
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
     * Lists all Personal models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Personal::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionUpload()
    {
        $model = new UploadForm();

        if (Yii::$app->request->isPost) {
            $model->file = UploadedFile::getInstance($model, 'file');

            if ($model->file && $model->validate()) {                
                $model->file->saveAs('uploads/' . $model->file->baseName . '.' . $model->file->extension);
            }
        }

        return $this->render('upload', ['model' => $model]);
    }
    /**
     * Displays a single Personal model.
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
     * Creates a new Personal model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {

        // $num = pathinfo(basaename($_FILES['pro_img']['name']), pathinfo_EXtention());
        // $new_img_name='img_'.uniqid().".".$num;
        // $img_path = "img/";
        // $upload_path = $img_path.$new_img_name;
        // move_uploaded_file($_FILES['pro_img']['tem_name'],$upload_path);
         
        // $pro_img=$new_img_name;
        

        $user_id = Yii::$app->user->identity->id;
        $request = Yii::$app->request;
        if ($request->isPost) {
            $personal = new personal(); 
           $name = $request->post('namem');
           $mail = $request->post('mail');
           $des = $request->post('description');
           $link = $request->post('link');
           $city = $request->post('city');
           $state = $request->post('state');
           $zip = $request->post('zip');
           $latitude = $request->post('latitude');
           $longitude = $request->post('longitude');
        //    $pro_img = $request->post('pro_img');
            
            // $pathFolder = "uploads/" . str_pad($id, 5, '0', STR_PAD_LEFT) . "/";
            $pathFolder = "../../frontend/web/uploads/" . str_pad($user_id, 5, '0', STR_PAD_LEFT) . "/";

            if (!file_exists($pathFolder)) {
                if (mkdir($pathFolder, 0755, true)) { } else {
                    die('failed');
                }
            }
            $pro_img = UploadedFile::getInstanceByName('pro_img');
          
            if (isset($pro_img->error) && $pro_img->error == 0) {
                $curFileName = $user_id . '_' . time() . '_';
                $imageName = '.' . $pro_img->getExtension();
                $path = $pathFolder . pathinfo($curFileName, PATHINFO_FILENAME);
                try {
                    if ($pro_img->saveAs($path . $imageName)) {
                        $slip_name = $curFileName.$imageName;
                      
                        $personal->pro_img = $slip_name;
                    }
                } catch (Exception $e) {
                }
            }

                
            
            $personal->name = $name;
            $personal->mail = $mail;
            $personal->discription = $des;
            $personal->link = $link;
            $personal->user_id = $user_id;
            $personal->state = $state;
            $personal->city = $city;
            $personal->zip = $zip;
            $personal->latitude = $latitude;
            $personal->longitude = $longitude;
         
            
            $personal->save();
        }
        $model = new Personal();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Personal model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {   $model = new personal(); 
        $user_id = Yii::$app->user->identity->id;
        $model = $this->findModel($id);
        $model ->user_id = $user_id;
        $request = Yii::$app->request;
        if ($request->isPost) {
            $model->user_id = $user_id;
            $model->save();
        }
        $pathFolder = "../../frontend/web/uploads/" . str_pad($user_id, 5, '0', STR_PAD_LEFT) . "/";
        if (!file_exists($pathFolder)) {
            if (mkdir($pathFolder, 0755, true)) { } else {
                die('failed');
            }
        }
        $pro_img = UploadedFile::getInstanceByName('pro_img2');
       
        if (isset($pro_img->error) && $pro_img->error == 0) {
            $curFileName = $user_id . '_' . time() . '_';
            $imageName = '.' . $pro_img->getExtension();
          
            $path = $pathFolder . pathinfo($curFileName, PATHINFO_FILENAME);
            try {
                if ($pro_img->saveAs($path . $imageName)) {
                    $slip_name = $curFileName.$imageName;
                  
                    $model->pro_img = $slip_name;
                }
            } catch (Exception $e) {
            }
              
        }
      
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Personal model.
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
     * Finds the Personal model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Personal the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Personal::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
