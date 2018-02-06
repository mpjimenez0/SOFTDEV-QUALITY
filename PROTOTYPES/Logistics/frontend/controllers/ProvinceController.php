<?php

namespace frontend\controllers;

use Yii;
use common\models\Province;
use common\models\ProvinceSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProvinceController implements the CRUD actions for Province model.
 */
class ProvinceController extends Controller
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
     * Lists all Province models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProvinceSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Province model.
     * @param string $name
     * @param string $region
     * @return mixed
     */
    public function actionView($name, $region)
    {
        return $this->render('view', [
            'model' => $this->findModel($name, $region),
        ]);
    }

    /**
     * Creates a new Province model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Province();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'name' => $model->name, 'region' => $model->region]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Province model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $name
     * @param string $region
     * @return mixed
     */
    public function actionUpdate($name, $region)
    {
        $model = $this->findModel($name, $region);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'name' => $model->name, 'region' => $model->region]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Province model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $name
     * @param string $region
     * @return mixed
     */
    public function actionDelete($name, $region)
    {
        $this->findModel($name, $region)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Province model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $name
     * @param string $region
     * @return Province the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($name, $region)
    {
        if (($model = Province::findOne(['name' => $name, 'region' => $region])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
