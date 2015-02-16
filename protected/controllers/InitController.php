<?php	
class InitController extends Controller
{
	public function actionIndex()
	{
		$parser = 	Yii::app()->mparser;
		$parser->setContent('http://www.ntv.ru/programma/schedule.jsp?bcast=1&channel=1');
		echo $parser->regContent();
	}
}

