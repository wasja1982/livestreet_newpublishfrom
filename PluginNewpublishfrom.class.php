<?php
/**
 * New PublishFrom - плагин для изменения автора топика при публикации или редактировании
 *
 * Версия:	1.0.2
 * Автор:	Александр Вереник
 * Профиль:	http://livestreet.ru/profile/Wasja/
 * GitHub:	https://github.com/wasja1982/livestreet_newsocialcomments
 *
 * Основан на плагине "PublishFrom" (автор: Артем Сошников) - https://catalog.livestreetcms.com/addon/view/170/
 *
 **/

if (! class_exists ( 'Plugin' )) {
    die ( 'Hacking attemp!' );
}

class PluginNewpublishfrom extends Plugin {
    public function Activate() {
        return true;
    }

    public function Deactivate() {
        return true;
    }

    public function Init() {
        return true;
    }
}