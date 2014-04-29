<p>
	<label for="{$sSelectName}">{$aLang.plugin.newpublishfrom.publishfrom_label}:</label>
	<select class="input-width-full" name="{$sSelectName}">
		<option value="{$oUserCurrent->getId()}"{if $oAuthorId==$oUserCurrent->getId()}selected="selected"{/if}>{$oUserCurrent->getLogin()}</option>
		{foreach from=$aUserList item=item}
		<option value="{$item.user_id}"{if $oAuthorId==$item.user_id}selected="selected"{/if}>{$item.user_login}</option>
		{/foreach}
	</select>
	<span class="note">{if $bTopic}{$aLang.plugin.newpublishfrom.publishfrom_note_topic}{else}{$aLang.plugin.newpublishfrom.publishfrom_note_comment}{/if}</span>
</p>