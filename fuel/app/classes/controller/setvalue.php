<?php

class Controller_Setvalue extends Controller_Template
{

	public function action_action1()
	{
		$data["subnav"] = array('action1'=> 'active' );
		$this->template->title = 'Setvalue &raquo; Action1';
		$this->template->content = View::forge('setvalue/action1', $data);
	}

}
