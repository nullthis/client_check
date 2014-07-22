<? echo '<?xml version="1.0" encoding="UTF-8"?>'."\n"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
	<head>
		<meta http-equiv="Content-Style-Type" content="text/css" />
		<meta http-equiv="Content-Script-Type" content="text/javascript" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

		<title>memoridge | user log list</title>
		<?
		$fn = @$_GET['fn'];
		if(!$fn){ exit; }
		$fn = str_replace('..', '', $fn);
		?>
	</head>

	<body>
		<h1>UserLogList</h1>
		<a href="./user_loglist.php">[戻る]</a>
		<h2><? echo $fn ?></h2>
		<pre>
		<? echo file_get_contents(dirname(dirname(__FILE__)). '/data/'. $fn); ?>
		</pre>
	</body>
</html>
