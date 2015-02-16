<?php
Yii::import('application.extensions.parser.*');
require_once('simple_html_dom.php');
		
class MParser extends CApplicationComponent
{
	private $content;
	private $error;
	
	public function init()
	{
		parent::init();
	}
	
	public function setContent($url)
	{
		$this->content = file_get_html($url);

	}
	
	public function regContent($kat1='', $kat2='',$kat3='')
	{
		if($this->content)
		{
			
			foreach($this->content->find('a') as $element)
			{
				$str =  $element->plaintext; 
				$ert = utf8_decode($str);
				print_r();
			}
		}
		else 
		{
			$this->error[] = 'content  пустой components/MParser.php';
		}

	}
	
	public function getContent()
	{
		return $this->content;
	}
	
	public function getError()
	{
		return $this->error;
	}
	
	
}