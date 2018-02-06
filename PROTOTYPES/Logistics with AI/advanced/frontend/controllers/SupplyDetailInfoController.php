<?php

namespace frontend\controllers;

use Yii;
use common\models\SupplyDetailInfo;
use common\models\SupplyDetailInfoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SupplyDetailInfoController implements the CRUD actions for SupplyDetailInfo model.
 */
class SupplyDetailInfoController extends Controller
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
     * Lists all SupplyDetailInfo models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SupplyDetailInfoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SupplyDetailInfo model.
     * @param integer $supplier_id
     * @param integer $supply_code
     * @return mixed
     */
    public function actionView($supplier_id, $supply_code)
    {
        return $this->render('view', [
            'model' => $this->findModel($supplier_id, $supply_code),
        ]);
    }

    /**
     * Creates a new SupplyDetailInfo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new SupplyDetailInfo();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'supplier_id' => $model->supplier_id, 'supply_code' => $model->supply_code]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing SupplyDetailInfo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $supplier_id
     * @param integer $supply_code
     * @return mixed
     */
    public function actionUpdate($supplier_id, $supply_code)
    {
        $model = $this->findModel($supplier_id, $supply_code);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'supplier_id' => $model->supplier_id, 'supply_code' => $model->supply_code]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing SupplyDetailInfo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $supplier_id
     * @param integer $supply_code
     * @return mixed
     */
    public function actionDelete($supplier_id, $supply_code)
    {
        $this->findModel($supplier_id, $supply_code)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SupplyDetailInfo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $supplier_id
     * @param integer $supply_code
     * @return SupplyDetailInfo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($supplier_id, $supply_code)
    {
        if (($model = SupplyDetailInfo::findOne(['supplier_id' => $supplier_id, 'supply_code' => $supply_code])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
