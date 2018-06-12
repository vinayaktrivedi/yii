<?php

namespace common\components;

use Yii;
use yii\helpers\ArrayHelper;
use yii\db\ActiveRecord;

class ActiveCache extends \yii\db\ActiveRecord
{
	public function rediscache(){
		$value= Yii::$app->redis->setex('key4',20,'hello');
		if ($value==NULL){
			return "yes";
		}
		else{
			return $value;
		}
	}
}



?>