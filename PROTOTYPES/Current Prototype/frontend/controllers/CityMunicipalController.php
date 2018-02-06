<?php

namespace frontend\controllers;

use Yii;
use common\models\CityMunicipal;
use common\models\CityMunicipalSearch;
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
     * @param string $name
     * @param string $province
     * @param string $region
     * @return mixed
     */
    public function actionView($name, $province, $region)
    {
        return $this->render('view', [
            'model' => $this->findModel($name, $province, $region),
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
            return $this->redirect(['view', 'name' => $model->name, 'province' => $model->province, 'region' => $model->region]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing CityMunicipal model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $name
     * @param string $province
     * @param string $region
     * @return mixed
     */
    public function actionUpdate($name, $province, $region)
    {
        $model = $this->findModel($name, $province, $region);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'name' => $model->name, 'province' => $model->province, 'region' => $model->region]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing CityMunicipal model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $name
     * @param string $province
     * @param string $region
     * @return mixed
     */
    public function actionDelete($name, $province, $region)
    {
        $this->findModel($name, $province, $region)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the CityMunicipal model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $name
     * @param string $province
     * @param string $region
     * @return CityMunicipal the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($name, $province, $region)
    {
        if (($model = CityMunicipal::findOne(['name' => $name, 'province' => $province, 'region' => $region])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
