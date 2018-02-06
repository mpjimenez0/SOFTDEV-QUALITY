<?php

namespace frontend\controllers;

use Yii;
use common\models\SupplyInWarehouse;
use common\models\SupplyInWarehouseSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SupplyInWarehouseController implements the CRUD actions for SupplyInWarehouse model.
 */
class SupplyInWarehouseController extends Controller
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
     * Lists all SupplyInWarehouse models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SupplyInWarehouseSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SupplyInWarehouse model.
     * @param integer $supply_detail_info_supplier_id
     * @param integer $supply_detail_info_supply_code
     * @param integer $warehouse_detail_info_warehouse_id
     * @param integer $warehouse_detail_info_contact_number_id
     * @return mixed
     */
    public function actionView($supply_detail_info_supplier_id, $supply_detail_info_supply_code, $warehouse_detail_info_warehouse_id, $warehouse_detail_info_contact_number_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($supply_detail_info_supplier_id, $supply_detail_info_supply_code, $warehouse_detail_info_warehouse_id, $warehouse_detail_info_contact_number_id),
        ]);
    }

    /**
     * Creates a new SupplyInWarehouse model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new SupplyInWarehouse();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'supply_detail_info_supplier_id' => $model->supply_detail_info_supplier_id, 'supply_detail_info_supply_code' => $model->supply_detail_info_supply_code, 'warehouse_detail_info_warehouse_id' => $model->warehouse_detail_info_warehouse_id, 'warehouse_detail_info_contact_number_id' => $model->warehouse_detail_info_contact_number_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing SupplyInWarehouse model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $supply_detail_info_supplier_id
     * @param integer $supply_detail_info_supply_code
     * @param integer $warehouse_detail_info_warehouse_id
     * @param integer $warehouse_detail_info_contact_number_id
     * @return mixed
     */
    public function actionUpdate($supply_detail_info_supplier_id, $supply_detail_info_supply_code, $warehouse_detail_info_warehouse_id, $warehouse_detail_info_contact_number_id)
    {
        $model = $this->findModel($supply_detail_info_supplier_id, $supply_detail_info_supply_code, $warehouse_detail_info_warehouse_id, $warehouse_detail_info_contact_number_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'supply_detail_info_supplier_id' => $model->supply_detail_info_supplier_id, 'supply_detail_info_supply_code' => $model->supply_detail_info_supply_code, 'warehouse_detail_info_warehouse_id' => $model->warehouse_detail_info_warehouse_id, 'warehouse_detail_info_contact_number_id' => $model->warehouse_detail_info_contact_number_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing SupplyInWarehouse model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $supply_detail_info_supplier_id
     * @param integer $supply_detail_info_supply_code
     * @param integer $warehouse_detail_info_warehouse_id
     * @param integer $warehouse_detail_info_contact_number_id
     * @return mixed
     */
    public function actionDelete($supply_detail_info_supplier_id, $supply_detail_info_supply_code, $warehouse_detail_info_warehouse_id, $warehouse_detail_info_contact_number_id)
    {
        $this->findModel($supply_detail_info_supplier_id, $supply_detail_info_supply_code, $warehouse_detail_info_warehouse_id, $warehouse_detail_info_contact_number_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SupplyInWarehouse model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $supply_detail_info_supplier_id
     * @param integer $supply_detail_info_supply_code
     * @param integer $warehouse_detail_info_warehouse_id
     * @param integer $warehouse_detail_info_contact_number_id
     * @return SupplyInWarehouse the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($supply_detail_info_supplier_id, $supply_detail_info_supply_code, $warehouse_detail_info_warehouse_id, $warehouse_detail_info_contact_number_id)
    {
        if (($model = SupplyInWarehouse::findOne(['supply_detail_info_supplier_id' => $supply_detail_info_supplier_id, 'supply_detail_info_supply_code' => $supply_detail_info_supply_code, 'warehouse_detail_info_warehouse_id' => $warehouse_detail_info_warehouse_id, 'warehouse_detail_info_contact_number_id' => $warehouse_detail_info_contact_number_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
