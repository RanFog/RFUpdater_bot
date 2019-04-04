<?php
//Файл менеджер - распознает команды и запускает сооветсвующие скрипты
include 'Auth/Auth.php';	   //Файл авторизации
include 'tfcommands/text.php'; //Файл с текстами команд
include 'sh.php';

function bot_manager($message, $chat_id, $user_id)
    {
	//Понижение регистра
	$mess = strtolower($message);

	switch (Auth($user_id))
		{
		case 'user':
			if ($mess[0] == "/")
				{
				//----- Обязательные команды -- help и start
   	 	        if (substr($mess,1,4) == "help") return TBHELP_ROOT;
 		        if (substr($mess,1,5) == "start") return TBSTART;
			    //----- Proxy ----
			    if (substr($mess,1,5) == "proxy") return TBPROXY;
			    //----- Команды помошники -----
			    if (substr($mess,1,7) == "chat_id") sendMessage($chat_id, $chat_id);
				if (substr($mess,1,7) == "user_id") sendMessage($chat_id, $user_id);
				//----- Команды Обновлений ---
				if (substr($mess,1,11) == "update_test") return update_test();
	
				break;
			    }
		case 'NULL':
			if ($mess[0] == "/")
				{
				//----- Обязательные команды -- help и start
   	     	    if (substr($mess,1,4) == "help") return TBHELP;
 	    	    if (substr($mess,1,5) == "start") return TBSTART;
			    break;
				}
		default: break;
		}
	}
?>



















