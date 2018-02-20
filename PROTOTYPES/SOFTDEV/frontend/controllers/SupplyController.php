<?php

namespace frontend\controllers;

use Yii;
use common\models\Supply;
use common\models\SupplySearch;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SupplyController implements the CRUD actions for Supply model.
 */
class SupplyController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => [
                            'logout', 'index', 'create', 'update', 'view',
                            'clothingtype', 'foodtype', 'healthtype',
                            'housewaretype', 'medicaltype', 'personalhygienetype', 'requestsupply',
                            'sheltertype', 'expirationreport'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Supply models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SupplySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Lists all Supply models.
     * @return mixed
     */
    public function actionFoodtype()
    {
        $searchModel = new SupplySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andFilterWhere(['type'=>'Food']);

        return $this->render('foodtype', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Lists all Supply models.
     * @return mixed
     */
    public function actionClothingtype()
    {
        $searchModel = new SupplySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andFilterWhere(['type'=>'Clothing']);

        return $this->render('clothingtype', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Lists all Supply models.
     * @return mixed
     */
    public function actionHealthtype()
    {
        $searchModel = new SupplySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andFilterWhere(['type'=>'Health']);

        return $this->render('healthtype', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Lists all Supply models.
     * @return mixed
     */
    public function actionHousewaretype()
    {
        $searchModel = new SupplySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andFilterWhere(['type'=>'Houseware Kits']);

        return $this->render('housewaretype', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Lists all Supply models.
     * @return mixed
     */
    public function actionMedicaltype()
    {
        $searchModel = new SupplySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andFilterWhere(['type'=>'Medical Kits']);

        return $this->render('medicaltype', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Lists all Supply models.
     * @return mixed
     */
    public function actionPersonalhygienetype()
    {
        $searchModel = new SupplySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andFilterWhere(['type'=>'Hygiene Kits']);

        return $this->render('medicaltype', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Lists all Supply models.
     * @return mixed
     */
    public function actionSheltertype()
    {
        $searchModel = new SupplySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andFilterWhere(['type'=>'Shelter Kits']);

        return $this->render('sheltertype', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Lists all Supply models.
     * @return mixed
     */
    public function actionExpirationreport()
    {
        $searchModel = new SupplySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('expirationreport', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionRequestsupply($code, $warehouse_name)
    {
        $model = $this->findModel($code, $warehouse_name);
        $model->scenario = 'requestsupply';

        $model->load(Yii::$app->request->post());
        $model->status = 'Delivered';
        $model->save();
        return $this->redirect(['intransit']);
    }



    /**
     * Displays a single Supply model.
     * @param integer $code
     * @param string $warehouse_name
     * @return mixed
     */
    public function actionView($code, $warehouse_name)
    {
        return $this->render('view', [
            'model' => $this->findModel($code, $warehouse_name),
        ]);
    }

    /**
     * Creates a new Supply model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Supply();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'code' => $model->code, 'warehouse_name' => $model->warehouse_name]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Supply model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $code
     * @param string $warehouse_name
     * @return mixed
     */
    public function actionUpdate($code, $warehouse_name)
    {
        $model = $this->findModel($code, $warehouse_name);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'code' => $model->code, 'warehouse_name' => $model->warehouse_name]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Supply model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $code
     * @param string $warehouse_name
     * @return mixed
     */
    public function actionDelete($code, $warehouse_name)
    {
        $this->findModel($code, $warehouse_name)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Supply model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $code
     * @param string $warehouse_name
     * @return Supply the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($code, $warehouse_name)
    {
        if (($model = Supply::findOne(['code' => $code, 'warehouse_name' => $warehouse_name])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
