<p>
	<label for="{$sSelectName}">{$aLang.plugin.publishfrom.publishfrom_label}:</label>
	<select class="input-width-full" name="{$sSelectName}">
		<option value="{$oUserCurrent->getId()}">{$oUserCurrent->getLogin()}</option>
		{foreach from=$aUserList item=item}
		<option value="{$item.user_id}">{$item.user_login}</option>
		{/foreach}	
	</select>
	<span class="note">{$aLang.plugin.publishfrom.publishfrom_note}</span>
</p>