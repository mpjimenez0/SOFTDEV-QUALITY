<?php

namespace frontend\controllers;

use Yii;
use frontend\models\CityMunicipal;
use frontend\models\CityMunicipalSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CityMunicipalController implements the CRUD actions for CityMunicipal model.
 */
class CityMunicipalController extends Controller
{
    /**
     * @inheritdoc
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
     * Lists all CityMunicipal models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CityMunicipalSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CityMunicipal model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new CityMunicipal model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new CityMunicipal();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing CityMunicipal model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing CityMunicipal model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    
    public function actionLists($id)
    {
        $CityMunicipals = CityMunicipal::find()
                        ->where(['region_id' => $id])
                        ->all();

        if (!empty($CityMunicipals)) {
            foreach ($CityMunicipals as $cm) {
                echo '<option value="' . $cm->id . '">' . $cm->CityMunicipal . '</option>';
            }
        }

        else {
            echo "<option>Select Municipal</option>";
        }
    }
    

    /*
    public function actionCityMunicipal()
    {
        $out = [];


        if (isset($_POST['depdrop_parents'])) {
            $parents = $_POST['depdrop_parents'];

            if ($parents != null) {
                $region_id = $parents[0];
                $out = self::getCityMunicipalLists($region_id);

                echo Json::encode(['output' => $out, 'selected' => '']);
                return;
            }
        }

        echo Json::encode(['output' => '', 'selected' => '']);
    }
    */

    /**
     * Finds the CityMunicipal model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return CityMunicipal the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = CityMunicipal::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
