<?php
		header("Content-Type: text/plain; charset=utf-8");
		if (isset($_GET['name']))
		{
			echo( 'Hello, Dear ' . htmlspecialchars ( $_GET ['name']) . '!' ); 
		}
		else 
		{
			echo('Hello!');
		}