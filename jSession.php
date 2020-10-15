<?php
	function checkJudgeSession()
	{
		if(!isset($_SESSION))
		{ 
			session_start(); 
		}
		$jusername = $_SESSION['jEmail'];
		
		if(empty($jusername))
		{
				return true;//If session is empty return true 
		}
		return false;
	}
?>