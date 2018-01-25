<?php

namespace frontend\controllers;

use Yii;
use common\models\WarehouseDetailInfo;
use common\models\WarehouseDetailInfoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * WarehouseDetailInfoController implements the CRUD actions for WarehouseDetailInfo model.
 */
class WarehouseDetailInfoController extends Controller
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
     * Lists all WarehouseDetailInfo models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new WarehouseDetailInfoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single WarehouseDetailInfo model.
     * @param integer $warehouse_id
     * @param integer $contact_number
     * @return mixed
     */
    public function actionView($warehouse_id, $contact_number)
    {
        return $this->render('view', [
            'model' => $this->findModel($warehouse_id, $contact_number),
        ]);
    }

    /**
     * Creates a new WarehouseDetailInfo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new WarehouseDetailInfo();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'warehouse_id' => $model->warehouse_id, 'contact_number' => $model->contact_number]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing WarehouseDetailInfo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $warehouse_id
     * @param integer $contact_number
     * @return mixed
     */
    public function actionUpdate($warehouse_id, $contact_number)
    {
        $model = $this->findModel($warehouse_id, $contact_number);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'warehouse_id' => $model->warehouse_id, 'contact_number' => $model->contact_number]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing WarehouseDetailInfo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $warehouse_id
     * @param integer $contact_number
     * @return mixed
     */
    public function actionDelete($warehouse_id, $contact_number)
    {
        $this->findModel($warehouse_id, $contact_number)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the WarehouseDetailInfo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $warehouse_id
     * @param integer $contact_number
     * @return WarehouseDetailInfo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($warehouse_id, $contact_number)
    {
        if (($model = WarehouseDetailInfo::findOne(['warehouse_id' => $warehouse_id, 'contact_number' => $contact_number])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
