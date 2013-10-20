<?php
if (! class_exists ( 'Plugin' )) {
	die ( 'Hacking attemp!' );
}

class PluginPublishfrom extends Plugin {
	public function Activate() {
		return true;
	}

	public function Deactivate() {
		return true;
	}

	public function Init() {		return true;
	}
}