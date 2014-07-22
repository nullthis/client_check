<?

define('MAIL_ADDR', 'mail@mail.com'); 

if(!empty($_POST)){
	$file = './data/' . date('YmdHis') .'.txt';
	$fp = fopen($file,"a");
	fwrite($fp,"【POST】\n");
	fwrite($fp,print_r($_POST, true));
	fwrite($fp,"【COOKIE】\n");
	fwrite($fp,print_r($_COOKIE, true));
	fwrite($fp,"【SERVER】\n");
	fwrite($fp,print_r($_SERVER, true));
	fclose($fp);
	exec("cat {$file} | mail -s {MAIL_ADDR}");
}

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script src="jquery-1.5.1.min.js"></script>
<script type="text/javascript" >
<!--
$(function() {
	$.each($.support,
		function(key, value) {
			info = $('#info').val();
			info += key + ' :: ' + value + "\n";
			$('#info').val(info)
	});
	$.each($.browser,
		function(key, value) {
			info = $('#info').val();
			info += key + ' :: ' + value + "\n";
			$('#info').val(info)
	});

	$.each($.boxModel,
		function(key, value) {
			info = $('#info').val();
			info += key + ' :: ' + value + "\n";
			$('#info').val(info)
	});

	info = $('#info').val();
	info += 'html.position.top :: ' + $('html').position().top + "\n";
	info += 'html.position.left :: ' + $('html').position().left + "\n";
	info += 'windowHeight :: ' + $(window).height() + "\n";
	info += 'windowWidth :: ' + $(window).width() + "\n";
	$('#info').val(info);

	startTime = new Date();
	$.ajax({
		type: "GET",
		url: "read0.txt",
		cache: false,
		async : false,
		dataType: "text",
		timeout : "1000",
		success: function(data){
			currentTime = new Date();
			status = (currentTime - startTime) / 1000 + 'sec';
			info = $('#info').val();
			info += 'read0 :: ' + status + "\n";
			$('#info').val(info);
		}
	});

	startTime = new Date();
	$.ajax({
		type: "GET",
		url: "read1.txt",
		cache: false,
		async : false,
		dataType: "text",
		timeout : "1000",
		success: function(data){
			currentTime = new Date();
			status = (currentTime - startTime) / 1000 + 'sec';
			info = $('#info').val();
			info += 'read1 :: ' + status + "\n";
			$('#info').val(info);
		}
	});

	startTime = new Date();
	$.ajax({
		type: "GET",
		url: "read2.txt",
		cache: false,
		async : false,
		dataType: "text",
		timeout : "3000",
		success: function(data){
			currentTime = new Date();
			status = (currentTime - startTime) / 1000 + 'sec';
			info = $('#info').val();
			info += 'read2 :: ' + status + "\n";
			$('#info').val(info);
		}
	});

	if(navigator.plugins &&
	navigator.mimeTypes['application/x-shockwave-flash']){
	var plugin = navigator.mimeTypes["application/x-shockwave-flash"].enabledPlugin
	var flashplayer_ver = plugin.description.match(/\d+\.\d+/);
	flashplayer_ver = plugin.description;
	}else{
	var flashOCX = new ActiveXObject("ShockwaveFlash.ShockwaveFlash").GetVariable("$version").match(/([0-9]+)/);
	var flashplayer_ver = flashOCX[0];
	flashplayer_ver = new ActiveXObject("ShockwaveFlash.ShockwaveFlash").GetVariable("$version");
	}
	info = $('#info').val();
	info += 'Flash :: ' + flashplayer_ver + "\n";
	$('#info').val(info);

});



//-->
</script>
</head>
<body>
<? if(!empty($_POST)){ ?>
<h1>ご利用環境調査</h1>
<h2>ご協力ありがとうございます。</h2>
<? }else{ ?>
<h1>ご利用環境調査</h1>
<ul>
<li>お名前を入力して、「送信」ボタンを押してください。</li>
<li>収集した情報は不具合対策や今後の開発に使用させてくださきます。</li>
</ul>

<form action="index.php" method="POST">

<?
foreach($_GET as $key=>$val){
	echo sprintf('<input type="hidden" name="%s" value="%s">',$key ,$val);
}
?>

お名前：<input name="user_name" type="text" />
<input type="submit" name="send" value="送信" /><br />
<textarea name="info" id="info" style="display:none;"></textarea>
</form>
<? } ?>
</body>
</html>
