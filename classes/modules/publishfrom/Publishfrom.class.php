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

class PluginNewpublishfrom_ModulePublishfrom extends Module {

    // Все запросы кешируются на уровне пользовательской стены
    protected $oMapper;

    public function Init() {
        $this->oMapper = Engine::GetMapper ( __CLASS__ );
    }

    public function GetUserList($oUserCurrent = null, $oAuthorId = null){
        return $aUserList = $this->oMapper->getUserList($oUserCurrent, $oAuthorId);
    }

    public function UpdateTopic($oTopic){
        if ($this->oMapper->UpdateTopic($oTopic)) {
            $this->Cache_Clean(Zend_Cache::CLEANING_MODE_MATCHING_TAG,array('topic_update',"topic_update_user_{$oTopic->getUserId()}","topic_update_blog_{$oTopic->getBlogId()}"));
            $this->Cache_Delete("topic_{$oTopic->getId()}");
            return true;
        }
        return false;
    }
}