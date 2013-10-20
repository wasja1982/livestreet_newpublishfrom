<?php

class PluginPublishfrom_ModulePublishfrom extends Module {
	
	// Все запросы кешируются на уровне пользовательской стены
	protected $oMapper;
	
	public function Init() {
		$this->oMapper = Engine::GetMapper ( __CLASS__ );
	}
	
	public function GetUserList(){
		return $aUserList = $this->oMapper->getUserList();
	}
	
	public function UpdateTopic($oTopic){
		$res = $this->oMapper->UpdateTopic($oTopic);
		$this->Cache_Clean(Zend_Cache::CLEANING_MODE_MATCHING_TAG,array('topic_update',"topic_update_user_{$oTopic->getUserId()}","topic_update_blog_{$oTopic->getBlogId()}"));
		$this->Cache_Delete("topic_{$oTopic->getId()}");		
		return $res;
	}
}