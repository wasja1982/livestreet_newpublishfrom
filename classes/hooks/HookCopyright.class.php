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

class PluginNewpublishfrom_HookCopyright extends Hook {
    public function RegisterHook() {
        $this->AddHook('template_copyright','CopyrightLink',__CLASS__,-10000);
    }

    public function CopyrightLink() {
        if (!isset($GLOBALS['ls_wasja_info']) || !$GLOBALS['ls_wasja_info']) {
            $GLOBALS['ls_wasja_info'] = true;
            return '<br><a href="http://ls.wasja.info">Plugins for LiveStreet CMS</a>';
        }
        return '';
    }
}
?>