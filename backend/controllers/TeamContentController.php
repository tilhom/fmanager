<?php

namespace backend\controllers;

use Yii;
use common\models\TeamContent;
use common\models\search\TeamContentSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TeamContentController implements the CRUD actions for TeamContent model.
 */
class TeamContentController extends Controller
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
     * Lists all TeamContent models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TeamContentSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TeamContent model.
     * @param integer $userid
     * @param integer $dr1
     * @return mixed
     */
    public function actionView($userid, $dr1)
    {
        return $this->render('view', [
            'model' => $this->findModel($userid, $dr1),
        ]);
    }

    /**
     * Creates a new TeamContent model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TeamContent();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'userid' => $model->userid, 'dr1' => $model->dr1]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing TeamContent model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $userid
     * @param integer $dr1
     * @return mixed
     */
    public function actionUpdate($userid, $dr1)
    {
        $model = $this->findModel($userid, $dr1);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'userid' => $model->userid, 'dr1' => $model->dr1]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing TeamContent model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $userid
     * @param integer $dr1
     * @return mixed
     */
    public function actionDelete($userid, $dr1)
    {
        $this->findModel($userid, $dr1)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TeamContent model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $userid
     * @param integer $dr1
     * @return TeamContent the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($userid, $dr1)
    {
        if (($model = TeamContent::findOne(['userid' => $userid, 'dr1' => $dr1])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
