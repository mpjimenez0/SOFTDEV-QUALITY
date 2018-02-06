<?php

namespace frontend\controllers;

use Yii;
use common\models\Disaster;
use common\models\DisasterSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DisasterController implements the CRUD actions for Disaster model.
 */
class DisasterController extends Controller
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
     * Lists all Disaster models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DisasterSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Disaster model.
     * @param integer $id
     * @param integer $disaster_type
     * @param string $address_barangay_id
     * @param integer $address_city_municipal_id
     * @param integer $address_province_id
     * @param integer $address_region_id
     * @return mixed
     */
    public function actionView($id, $disaster_type, $address_barangay_id, $address_city_municipal_id, $address_province_id, $address_region_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $disaster_type, $address_barangay_id, $address_city_municipal_id, $address_province_id, $address_region_id),
        ]);
    }

    /**
     * Creates a new Disaster model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Disaster();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'disaster_type' => $model->disaster_type, 'address_barangay_id' => $model->address_barangay_id, 'address_city_municipal_id' => $model->address_city_municipal_id, 'address_province_id' => $model->address_province_id, 'address_region_id' => $model->address_region_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Disaster model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @param integer $disaster_type
     * @param string $address_barangay_id
     * @param integer $address_city_municipal_id
     * @param integer $address_province_id
     * @param integer $address_region_id
     * @return mixed
     */
    public function actionUpdate($id, $disaster_type, $address_barangay_id, $address_city_municipal_id, $address_province_id, $address_region_id)
    {
        $model = $this->findModel($id, $disaster_type, $address_barangay_id, $address_city_municipal_id, $address_province_id, $address_region_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'disaster_type' => $model->disaster_type, 'address_barangay_id' => $model->address_barangay_id, 'address_city_municipal_id' => $model->address_city_municipal_id, 'address_province_id' => $model->address_province_id, 'address_region_id' => $model->address_region_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Disaster model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @param integer $disaster_type
     * @param string $address_barangay_id
     * @param integer $address_city_municipal_id
     * @param integer $address_province_id
     * @param integer $address_region_id
     * @return mixed
     */
    public function actionDelete($id, $disaster_type, $address_barangay_id, $address_city_municipal_id, $address_province_id, $address_region_id)
    {
        $this->findModel($id, $disaster_type, $address_barangay_id, $address_city_municipal_id, $address_province_id, $address_region_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Disaster model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param integer $disaster_type
     * @param string $address_barangay_id
     * @param integer $address_city_municipal_id
     * @param integer $address_province_id
     * @param integer $address_region_id
     * @return Disaster the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $disaster_type, $address_barangay_id, $address_city_municipal_id, $address_province_id, $address_region_id)
    {
        if (($model = Disaster::findOne(['id' => $id, 'disaster_type' => $disaster_type, 'address_barangay_id' => $address_barangay_id, 'address_city_municipal_id' => $address_city_municipal_id, 'address_province_id' => $address_province_id, 'address_region_id' => $address_region_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
