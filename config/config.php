<?php
/**
 * New PublishFrom - плагин для изменения автора топика при публикации или редактировании
 *
 * Версия:	1.0.0
 * Автор:	Александр Вереник
 * Профиль:	http://livestreet.ru/profile/Wasja/
 * GitHub:	https://github.com/wasja1982/livestreet_newsocialcomments
 *
 * Основан на плагине "PublishFrom" (автор: Артем Сошников) - https://catalog.livestreetcms.com/addon/view/170/
 *
 **/

$config = array();

// Массив логинов пользователей
$config['user_logins'] = array(
    'Marat','Kiril','Julia'
);

// Массив идентификаторов пользователей
$config['user_ids'] = array();

// Диапазон идентификаторов пользователей
$config['user_id_expression'] = '13-215';

// Имя элемента формы
$config['select_name'] = 'publishfrom';

// Изменять пользователя только при публикации
$config['only_publish'] = false;

// Разрешить изменять пользователя для комментариев
$config['for_comments'] = true;

return $config;