<?php
Abstract Class BaseController
{

	public $core;
	public $datas;
	public $view;
        
	function __construct($core)
	{
	        $this->core = $core;
	}

	public abstract function getDatas();

	public abstract function getView($datas);
}
?>