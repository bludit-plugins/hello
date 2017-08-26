<?php

class pluginHello extends Plugin {

	public function init()
	{
		$this->dbFields = array(
			'message'=>''
		);
	}

	public function form()
	{
		$html  = '<div>';
		$html .= '<label>Message</label>';
		$html .= '<input id="jsmessage" name="label" type="text" value="'.$this->getValue('message').'">';
		$html .= '</div>';

		return $html;
	}

	public function siteSidebar()
	{
		$html  = '<div class="plugin plugin-hello">';
		$html .= '<div class="plugin-content">';
		$html .= '<h3>'.$this->getValue('message').'</h3>';
 		$html .= '</div>';
 		$html .= '</div>';

		return $html;
	}
}