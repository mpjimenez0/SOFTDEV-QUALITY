<?php

namespace frontend\controllers;

use Yii;
use common\models\SupplierHasContactNumber;
use common\models\SupplierHasContactNumberSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SupplierHasContactNumberController implements the CRUD actions for SupplierHasContactNumber model.
 */
class SupplierHasContactNumberController extends Controller
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
     * Lists all SupplierHasContactNumber models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SupplierHasContactNumberSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SupplierHasContactNumber model.
     * @param integer $supplier_id
     * @param integer $contact_number_id
     * @return mixed
     */
    public function actionView($supplier_id, $contact_number_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($supplier_id, $contact_number_id),
        ]);
    }

    /**
     * Creates a new SupplierHasContactNumber model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new SupplierHasContactNumber();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'supplier_id' => $model->supplier_id, 'contact_number_id' => $model->contact_number_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing SupplierHasContactNumber model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $supplier_id
     * @param integer $contact_number_id
     * @return mixed
     */
    public function actionUpdate($supplier_id, $contact_number_id)
    {
        $model = $this->findModel($supplier_id, $contact_number_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'supplier_id' => $model->supplier_id, 'contact_number_id' => $model->contact_number_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing SupplierHasContactNumber model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $supplier_id
     * @param integer $contact_number_id
     * @return mixed
     */
    public function actionDelete($supplier_id, $contact_number_id)
    {
        $this->findModel($supplier_id, $contact_number_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SupplierHasContactNumber model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $supplier_id
     * @param integer $contact_number_id
     * @return SupplierHasContactNumber the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($supplier_id, $contact_number_id)
    {
        if (($model = SupplierHasContactNumber::findOne(['supplier_id' => $supplier_id, 'contact_number_id' => $contact_number_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
