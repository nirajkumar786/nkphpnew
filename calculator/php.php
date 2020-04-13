<?php 
extract($_POST);
if(isset($save))
{
	switch($ch)
	{
		case '+':
		$res=$fn+$sn;
		break;
		
		case '-':
		$res=$fn-$sn;
		break;
		
		case '*':
		$res=$fn*$sn;
		break;
		
	}
	
}
