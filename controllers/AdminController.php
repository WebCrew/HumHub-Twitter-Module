<?php
namespace humhub\modules\discord\controllers;

use Yii;
use humhub\models\Setting;
use yii\helpers\Url;

class AdminController extends \humhub\modules\admin\components\Controller
{

    public function behaviors()
    {
        return [
            'acl' => [
                'class' => \humhub\components\behaviors\AccessControl::className(),
                'adminOnly' => true
            ]
        ];
    }

    public function actionIndex()
    {
        $form = new \humhub\modules\discord\forms\SettingsForm();
        if ($form->load(Yii::$app->request->post())) {
            if ($form->validate()) {
                Setting::Set('sort', $form->sort, 'discord');
                
                Yii::$app->session->setFlash('data-saved', Yii::t('DiscordModule.base', 'Saved'));
                // $this->redirect(Url::toRoute('index'));
            }
        } else {
            $form->sort = Setting::Get('sort', 'discord');
        }
        
        return $this->render('index', [
            'model' => $form
        ]);
    }

}
