<?php



class GalleryCommand extends CConsoleCommand{



    /**
     * Command run changeConfig() on listed models
     *
     * Usage:
     *  ./yiic gallery reconfigure ModelClass[ ModelClass ...]
     *
     * @param $models
     */
    public function actionReconfigure ($models) {

        chdir(Yii::getPathOfAlias('webroot'));

        foreach ($models as $modelClass) {
            foreach ($modelClass::model()->findAll() as $model) {
                /** @var ActiveRecord $model */
                $model->galleryBehavior->changeConfig(true);
            }
        }

    }



}
 