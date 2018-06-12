<?php
	namespace backend\components ;
	use yii\base\Widget;
	class FirstWidget extends Widget {
		public $mes;
		public function init(){
			parent::init();
			if($this->mes === null){
				$this->mes= "Hello World";
			}
			
		}
		public function run(){
			return "<h1>$this->mes </h1>";
		}
	}

?>