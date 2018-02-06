<?php

namespace frontend\controllers;

use Yii;
use common\models\Barangay;
use common\models\BarangaySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BarangayController implements the CRUD actions for Barangay model.
 */
class BarangayController extends Controller
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
     * Lists all Barangay models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BarangaySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Barangay model.
     * @param string $name
     * @param string $city_municipal
     * @param string $province
     * @param string $region
     * @return mixed
     */
    public function actionView($name, $city_municipal, $province, $region)
    {
        return $this->render('view', [
            'model' => $this->findModel($name, $city_municipal, $province, $region),
        ]);
    }

    /**
     * Creates a new Barangay model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Barangay();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'name' => $model->name, 'city_municipal' => $model->city_municipal, 'province' => $model->province, 'region' => $model->region]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Barangay model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $name
     * @param string $city_municipal
     * @param string $province
     * @param string $region
     * @return mixed
     */
    public function actionUpdate($name, $city_municipal, $province, $region)
    {
        $model = $this->findModel($name, $city_municipal, $province, $region);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'name' => $model->name, 'city_municipal' => $model->city_municipal, 'province' => $model->province, 'region' => $model->region]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Barangay model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $name
     * @param string $city_municipal
     * @param string $province
     * @param string $region
     * @return mixed
     */
    public function actionDelete($name, $city_municipal, $province, $region)
    {
        $this->findModel($name, $city_municipal, $province, $region)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Barangay model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $name
     * @param string $city_municipal
     * @param string $province
     * @param string $region
     * @return Barangay the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($name, $city_municipal, $province, $region)
    {
        if (($model = Barangay::findOne(['name' => $name, 'city_municipal' => $city_municipal, 'province' => $province, 'region' => $region])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
