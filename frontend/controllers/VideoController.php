<?php
/*
Name: Mehedi Hasan
Designation: Software Developer (WEB)
Date: 10/6/21 15:00:47
*/

namespace frontend\controllers;


use common\models\Video;
use common\models\VideoLike;
use common\models\VideoView;
use yii\base\BaseObject;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\NotFoundHttpException;

class VideoController extends \yii\web\Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['like', 'dislike', 'history'],
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@']
                    ]
                ]
            ],
            'verb' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'like' => ['post'],
                    'dislike' => ['post'],
                ]
            ]
        ];
    }

    public function actionIndex(){
        $dataProvider = new ActiveDataProvider([
            'query' => Video::find()->published()->latest()
        ]);
        return $this
            ->render('index',[
                'dataProvider' => $dataProvider
            ]);
    }
    public function actionView($id){
        $this->layout = 'auth';
        $video = $this->findVideo($id);
        $add_view = $this->AddView($id);
        return $this->render('view', [
            'model' => $video,
        ]);
    }
    public function actionLike($id){
        $video = $this->findVideo($id);
        $videoLike = new VideoLike();
        $videoLike->video_id = $video->video_id;
        $videoLike->user_id = \Yii::$app->user->id;
        $videoLike->created_at = time();
        $videoLike->save();
    }
    public function actionDislike($id)
    {
//        $video = $this->findVideo($id);
//        $userId = \Yii::$app->user->id;
//
//        $videoLikeDislike = VideoLike::find()
//            ->userIdVideoId($userId, $id)
//            ->one();
//        if (!$videoLikeDislike) {
//            $this->saveLikeDislike($id, $userId, VideoLike::TYPE_DISLIKE);
//        } else if ($videoLikeDislike->type == VideoLike::TYPE_DISLIKE) {
//            $videoLikeDislike->delete();
//        } else {
//            $videoLikeDislike->delete();
//            $this->saveLikeDislike($id, $userId, VideoLike::TYPE_DISLIKE);
//        }
//
//        return $this->renderAjax('_buttons', [
//            'model' => $video
//        ]);
    }
    protected function findVideo($id){
        $video = Video::findOne($id);
        if(!$video){
            throw new NotFoundHttpException('Video does not exist');
        }
        return $video;
    }
    protected function AddView($id){
        $videoView = new VideoView();
        $videoView->video_id = $id;
        $videoView->user_id = \Yii::$app->user->id;
        $videoView->created_at = time();
        $videoView->save();
        return $videoView;
    }

}