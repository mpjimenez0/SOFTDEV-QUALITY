<?php

namespace frontend\controllers;

use Yii;
use common\models\Address;
use common\models\AddressSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AddressController implements the CRUD actions for Address model.
 */
class AddressController extends Controller
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
     * Lists all Address models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AddressSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Address model.
     * @param string $barangay_id
     * @param integer $city_municipal_id
     * @param integer $province_id
     * @param integer $region_id
     * @return mixed
     */
    public function actionView($barangay_id, $city_municipal_id, $province_id, $region_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($barangay_id, $city_municipal_id, $province_id, $region_id),
        ]);
    }

    /**
     * Creates a new Address model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Address();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'barangay_id' => $model->barangay_id, 'city_municipal_id' => $model->city_municipal_id, 'province_id' => $model->province_id, 'region_id' => $model->region_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Address model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $barangay_id
     * @param integer $city_municipal_id
     * @param integer $province_id
     * @param integer $region_id
     * @return mixed
     */
    public function actionUpdate($barangay_id, $city_municipal_id, $province_id, $region_id)
    {
        $model = $this->findModel($barangay_id, $city_municipal_id, $province_id, $region_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'barangay_id' => $model->barangay_id, 'city_municipal_id' => $model->city_municipal_id, 'province_id' => $model->province_id, 'region_id' => $model->region_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Address model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $barangay_id
     * @param integer $city_municipal_id
     * @param integer $province_id
     * @param integer $region_id
     * @return mixed
     */
    public function actionDelete($barangay_id, $city_municipal_id, $province_id, $region_id)
    {
        $this->findModel($barangay_id, $city_municipal_id, $province_id, $region_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Address model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $barangay_id
     * @param integer $city_municipal_id
     * @param integer $province_id
     * @param integer $region_id
     * @return Address the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($barangay_id, $city_municipal_id, $province_id, $region_id)
    {
        if (($model = Address::findOne(['barangay_id' => $barangay_id, 'city_municipal_id' => $city_municipal_id, 'province_id' => $province_id, 'region_id' => $region_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
