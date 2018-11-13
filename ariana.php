#!/usr/bin/php -q
<?php
	//By Mohammad Ghaheri
	//mohammad.ghaheri@gmail.com
	//http://mohammadghaheri.blog.ir
	//+989133332330
	require('phpagi.php');
	error_reporting(E_ALL);
	$agi = new AGI();
	$agi->answer();  
	$agi->verbose(">> START ARIANA\r\n",1); 
	$outputfilename = $argv[1];
	$apikey = "YOUR ARIANA API KEY";
	$text = urlencode("بارْوانْ سامانه هوشمند حمل بار سنگینْ");
	$agi->verbose(">> REQUSET FOR PERISAN VOICE\r\n",1);
	file_put_contents($outputfilename, fopen("http://api.farsireader.com/ArianaCloudService/ReadTextGET?APIKey=".$apikey."&Text=".$text."&Speaker=%27%27&Format=wav/8/m&GainLevel=0&PitchLevel=0&PunctuationLevel=0&SpeechSpeedLevel=0&ToneLevel=0", 'r'));
	$agi->verbose(">> PERISAN VOICE IS READY\r\n",1);
?>
