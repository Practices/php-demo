<?php
class HomeController extends Controller
{
	function action_index()
	{
		$this->view->generate('home-view.php', 'template-view.php');
	}
}
