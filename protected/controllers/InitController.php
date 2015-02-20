<?php	
class InitController extends Controller
{
	public function actionIndex()
	{
		$parser = 	Yii::app()->mparser;
		$parser->setContent('http://www.1tv.ru/one/shed_ld/z0/?p_r=93120');
		echo $parser->regexpContent();
	}
}

