<?php

header('Content-Type: text/plain;'); 			//Мы будем выводить простой текст
set_time_limit(0); 								//Скрипт должен работать постоянно
ob_implicit_flush(); 							//Все echo должны сразу же выводиться
//$hostname = gethostname();						//имя хоста
$address = gethostbyname('client.server'); 			//Адрес работы сервера
$port = 1001; 									//Порт работы сервера (лучше какой-нибудь редкоиспользуемый)