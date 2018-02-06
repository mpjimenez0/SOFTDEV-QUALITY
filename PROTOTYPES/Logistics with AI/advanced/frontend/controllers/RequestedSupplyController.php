<?php

namespace frontend\controllers;

use Yii;
use common\models\RequestedSupply;
use common\models\RequestedSupplySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RequestedSupplyController implements the CRUD actions for RequestedSupply model.
 */
class RequestedSupplyController extends Controller
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
     * Lists all RequestedSupply models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new RequestedSupplySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single RequestedSupply model.
     * @param integer $request_id
     * @param integer $request_user_info_user_id
     * @param integer $supply_detail_info_supplier
     * @param integer $supply_detail_info_supply_code
     * @param string $vehicle_plate_number
     * @return mixed
     */
    public function actionView($request_id, $request_user_info_user_id, $supply_detail_info_supplier, $supply_detail_info_supply_code, $vehicle_plate_number)
    {
        return $this->render('view', [
            'model' => $this->findModel($request_id, $request_user_info_user_id, $supply_detail_info_supplier, $supply_detail_info_supply_code, $vehicle_plate_number),
        ]);
    }

    /**
     * Creates a new RequestedSupply model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new RequestedSupply();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'request_id' => $model->request_id, 'request_user_info_user_id' => $model->request_user_info_user_id, 'supply_detail_info_supplier' => $model->supply_detail_info_supplier, 'supply_detail_info_supply_code' => $model->supply_detail_info_supply_code, 'vehicle_plate_number' => $model->vehicle_plate_number]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing RequestedSupply model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $request_id
     * @param integer $request_user_info_user_id
     * @param integer $supply_detail_info_supplier
     * @param integer $supply_detail_info_supply_code
     * @param string $vehicle_plate_number
     * @return mixed
     */
    public function actionUpdate($request_id, $request_user_info_user_id, $supply_detail_info_supplier, $supply_detail_info_supply_code, $vehicle_plate_number)
    {
        $model = $this->findModel($request_id, $request_user_info_user_id, $supply_detail_info_supplier, $supply_detail_info_supply_code, $vehicle_plate_number);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'request_id' => $model->request_id, 'request_user_info_user_id' => $model->request_user_info_user_id, 'supply_detail_info_supplier' => $model->supply_detail_info_supplier, 'supply_detail_info_supply_code' => $model->supply_detail_info_supply_code, 'vehicle_plate_number' => $model->vehicle_plate_number]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing RequestedSupply model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $request_id
     * @param integer $request_user_info_user_id
     * @param integer $supply_detail_info_supplier
     * @param integer $supply_detail_info_supply_code
     * @param string $vehicle_plate_number
     * @return mixed
     */
    public function actionDelete($request_id, $request_user_info_user_id, $supply_detail_info_supplier, $supply_detail_info_supply_code, $vehicle_plate_number)
    {
        $this->findModel($request_id, $request_user_info_user_id, $supply_detail_info_supplier, $supply_detail_info_supply_code, $vehicle_plate_number)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the RequestedSupply model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $request_id
     * @param integer $request_user_info_user_id
     * @param integer $supply_detail_info_supplier
     * @param integer $supply_detail_info_supply_code
     * @param string $vehicle_plate_number
     * @return RequestedSupply the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($request_id, $request_user_info_user_id, $supply_detail_info_supplier, $supply_detail_info_supply_code, $vehicle_plate_number)
    {
        if (($model = RequestedSupply::findOne(['request_id' => $request_id, 'request_user_info_user_id' => $request_user_info_user_id, 'supply_detail_info_supplier' => $supply_detail_info_supplier, 'supply_detail_info_supply_code' => $supply_detail_info_supply_code, 'vehicle_plate_number' => $vehicle_plate_number])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
