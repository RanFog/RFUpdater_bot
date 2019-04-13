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
				if (substr($mess,1,15) == "update_test_bot") return update_test();
				if (substr($mess,1,18) == "update_updater_bot") return update_updater();
				if (substr($mess,1,15) == "update_kbuo_bot") return update_kbuo();
				if (substr($mess,1,17) == "update_kbccna_bot") return update_kbccna();
				if (substr($mess,1,15) == "update_lbuo_bot") return update_lbuo();
				if (substr($mess,1,9) == "update_uo") return update_uo();
				break;
			    }
		case 'NULL':
			if ($mess[0] == "/")
				{
				//----- Обязательные команды -- help и start
   	     	    if (substr($mess,1,4) == "help") return TBHELP;
				if (substr($mess,1,5) == "start") return TBSTART;
				//----- User_ID ---------------------
				if (substr($mess,1,7) == "user_id") sendMessage($chat_id, $user_id);
			    break;
				}
		default: break;
		}
	}
?>



















