<p>
	<label for="{$sSelectName}">{$aLang.publishfrom_label}:</label>
	<select name="{$sSelectName}">
		<option value="{$oUserCurrent->getId()}">{$oUserCurrent->getLogin()}</option>
		{foreach from=$aUserList item=item}
		<option value="{$item.user_id}">{$item.user_login}</option>
		{/foreach}	
	</select>
	<span class="note">{$aLang.publishfrom_note}</span>
</p>