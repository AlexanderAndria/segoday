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
       $ch = curl_init($url);
		curl_setopt($ch,  CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; pl; rv:1.9) Gecko/2008052906 Firefox/3.0'); 
		curl_setopt($ch, CURLOPT_TIMEOUT, 2);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 2);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_COOKIEFILE, '');

		$str = curl_exec($ch);
		
		curl_close($ch);
        $this->content=str_get_html($str);
    }

    public function regexpContent($kat1='', $kat2='', $kat3='')
    {
        if ($this->content)
        {
            foreach ($this->content->find('a') as $element)
            {
                $str=$element->plaintext;

                $str=iconv('cp1251', 'UTF-8', $str);
                $blFind=preg_match('#Ш#i', $str);
                if ($blFind)
                {
                    echo $str;
                }
                print_r();
            }
        }
        else
        {
            $this->error[]='content  пустой components/MParser.php';
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
