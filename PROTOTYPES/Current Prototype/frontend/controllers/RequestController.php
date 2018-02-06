<?php

namespace frontend\controllers;

use common\models\User;
use Yii;
use common\models\Request;
use common\models\RequestSearch;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii2fullcalendar\models\Event;

/**
 * RequestController implements the CRUD actions for Request model.
 */
class RequestController extends Controller
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
                            'intransit', 'arrived', 'calendar', 'confirmed', 'delete', 'confirmation', 'intransiting', 'arriving'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                    'allow' => true,
                    'roles' => ['@'],
                ],
            ],
        ];
    }

    /**
     * Lists all Request models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new RequestSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andFilterWhere(['status'=>'Pending']);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Lists all Request models.
     * @return mixed
     */
    public function actionIntransit()
    {
        $searchModel = new RequestSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andFilterWhere(['status'=>'Transit']);

        return $this->render('intransit', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Lists all Request models.
     * @return mixed
     */
    public function actionArrived()
    {
        $searchModel = new RequestSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andFilterWhere(['status'=>'Delivered']);

        return $this->render('arrived', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionConfirmed()
    {
        $searchModel = new RequestSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andFilterWhere(['status'=>'Confirmed']);

        return $this->render('confirmed', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Lists all Request models.
     * @return mixed
     */
    public function actionCalendar()
    {
        $events = Request::find()->all();
        $user = User::find()->all();

        $tasks = [];
        foreach($events as $eve)
        {
            $event = new Event();
			$user = new User();
			$request = new Request();
			
			/*if($request->requestor->type = 'National'){
				$event->backgroundColor = 'black';
			}*/
            
            $event->id = $eve->id;
            $event->title = $eve->reason;
            $event->start = $eve->date_needed;
            $tasks[] = $event;
        }
        return $this->render('calendar', [
            'events' => $tasks,
        ]);
    }
	


    public function actionCancel($id)
    {
        return $this->render('index', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Displays a single Request model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Request model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Request();

        if ($model->load(Yii::$app->request->post())) {
            $model->status = 'Pending';
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Request model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    public function actionConfirmation($id)
    {
        $model = $this->findModel($id);
        $model->scenario = 'confirmation';

        $model->load(Yii::$app->request->post());
        $model->status = 'Confirmed';
        $model->save();
        return $this->redirect(['index']);

    }

    public function actionIntransiting($id)
    {
        $model = $this->findModel($id);
        $model->scenario = 'intransiting';

        $model->load(Yii::$app->request->post());
        $model->status = 'Transit';
        $model->save();
        return $this->redirect(['confirmed']);
    }

    public function actionArriving($id)
    {
        $model = $this->findModel($id);
        $model->scenario = 'arriving';

        $model->load(Yii::$app->request->post());
        $model->status = 'Delivered';
        $model->save();
        return $this->redirect(['intransit']);
    }

    /**
     * Deletes an existing Request model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }




    /**
     * Finds the Request model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Request the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Request::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }


}
