<?php

namespace kraiba\fcb;

use Yii;
/**
 * This is just an example.
 */
class FirebaseSend
{
	var api_key;
	    // constructor
    function __construct() {
        $this->api_key=Yii::$app->params['fcm']["apiKey"]
    }

    public function sendMessage()
    {
    	
        return "Hello!";
    }
}
