<?php

namespace frontend\controllers;

use Yii;
use common\models\DriverOfVehicle;
use common\models\DriverOfVehicleSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DriverOfVehicleController implements the CRUD actions for DriverOfVehicle model.
 */
class DriverOfVehicleController extends Controller
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
     * Lists all DriverOfVehicle models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DriverOfVehicleSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DriverOfVehicle model.
     * @param string $vehicle_plate_number
     * @param integer $driver_id
     * @return mixed
     */
    public function actionView($vehicle_plate_number, $driver_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($vehicle_plate_number, $driver_id),
        ]);
    }

    /**
     * Creates a new DriverOfVehicle model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new DriverOfVehicle();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'vehicle_plate_number' => $model->vehicle_plate_number, 'driver_id' => $model->driver_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing DriverOfVehicle model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $vehicle_plate_number
     * @param integer $driver_id
     * @return mixed
     */
    public function actionUpdate($vehicle_plate_number, $driver_id)
    {
        $model = $this->findModel($vehicle_plate_number, $driver_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'vehicle_plate_number' => $model->vehicle_plate_number, 'driver_id' => $model->driver_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing DriverOfVehicle model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $vehicle_plate_number
     * @param integer $driver_id
     * @return mixed
     */
    public function actionDelete($vehicle_plate_number, $driver_id)
    {
        $this->findModel($vehicle_plate_number, $driver_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the DriverOfVehicle model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $vehicle_plate_number
     * @param integer $driver_id
     * @return DriverOfVehicle the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($vehicle_plate_number, $driver_id)
    {
        if (($model = DriverOfVehicle::findOne(['vehicle_plate_number' => $vehicle_plate_number, 'driver_id' => $driver_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
