<?php
$config = array();

/*Массив логинов пользователей*/
$config['user_logins'] = array(
	//'Marat','Kiril','Julia',
	'Julia',
);

/*Массив ID пользователей*/
$config['user_ids'] = array();

/*выражение от и до */
$config['user_id_expression'] = '13-215';

/*Имя элемента формы*/
$config['select_name'] = 'publishfrom';

/*Изменять пользователя только при публикации*/
$config['only_publish'] = false;

return $config;