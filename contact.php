<!DOCTYPE html>
<html lang="ja">
<meta charset=utf-8>
<body>

<?php

$a=$_COOKIE["data"];
$a=explode(",",$a);

print("
<form method='post' action='contact_comfilm.php'>
	<h3>お問い合わせフォーム</h3>
	<p>
		氏名：<br>
		<input type='text' name='name' size='50' placeholder='例）佐藤太郎' value='$a[0]' required><br>
		電話番号：<br>
		<input type='text' name='tel' size='50' placeholder='例）0000000000' value='$a[1]' required><br>
		メールアドレス：<br>
		<input type='email' name='email' size='50' placeholder='例）test@sample.com' value='$a[2]' required><br>
		ご意見・ご要望<br>
		<textarea name='comment' cols='70' rows='7' maxlength='200' required>".$a[3]."</textarea>
	</p>
	<p>
		<input type='submit' value='確認画面へ'>
	</p>
</form>
");

?>

</body>
</html>
