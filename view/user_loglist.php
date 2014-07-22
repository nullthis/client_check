<? echo '<?xml version="1.0" encoding="UTF-8"?>'."\n"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
	<head>
		<meta http-equiv="Content-Style-Type" content="text/css" />
		<meta http-equiv="Content-Script-Type" content="text/javascript" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

		<title>memoridge | user log list</title>
	</head>
	
	<body>
		<h1>UserLogList</h1>
		<h2>Logs</h2>
		<ul>
			<?
			$files = glob(dirname(dirname(__FILE__)). '/data/*'); 
			foreach($files as $file){
				echo str_replace('%fn%', basename($file), '<li><a href="./user_logview.php?fn=%fn%">%fn%</a></li>');
			}
			?>
		</ul>
	</body>
</html>
