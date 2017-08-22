<?php

// example: https://github.com/onlinetuts/line-bot-api/blob/master/php/example/chapter-01.php

include ('line-bot-api/php/line-bot.php');

$channelSecret = '76ddda6eaee6bec5eda4388aa55221cd';
$access_token  = '6aeLneKJ+9w36JIAyH8vidEF3dKO6u0QsYB4nlMmAtYh6/glfGqyO704L9cDIjSIqfte9PJitw7KtOJNYpKAJzWYixyu5O7Lm9YqMFpHUh+COF9gtNaRXeA9wKgOQsBzaX50F5TcrFEPaIqlO7AJoQdB04t89/1O/w1cDnyilFU=';

$bot = new BOT_API($channelSecret, $access_token);
	
if (!empty($bot->isEvents)) {
		
	$bot->replyMessageNew($bot->replyToken, json_encode($bot->message));

	if ($bot->isSuccess()) {
		echo 'Succeeded!';
		exit();
	}

	// Failed
	echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
	exit();

}
