<?php

	mb_language("ja");
	mb_internal_encoding("utf-8");

	$name=$_POST["name"];
	$name=htmlspecialchars($name);

	$tel=$_POST["tel"];
	$tel=htmlspecialchars($tel);

	$email=$_POST["email"];
	$email=htmlspecialchars($email);

	$comment=$_POST["comment"];
	$comment=htmlspecialchars($comment);

	setcookie("data",$name.",".$tel.",".$email.",".$comment,time()+60*60);
?>
<!DOCTYPE html>
<html lang="ja">
<meta charset=utf-8>
<body>

<?php

print("<form method='post' action='send.php'>
	<h3>お問い合わせフォーム</h3>
	<p>
		氏名：<br>
		<input type='text' name='name' size='50' value='$name' readonly><br>
		電話番号：<br>
		<input type='text' name='tel' size='50' value='$tel' readonly><br>
		メールアドレス：<br>
		<input type='email' name='email' size='50' value='$email' readonly><br>
		ご意見・ご要望<br>
		<textarea name='comment' cols='70' rows='7' maxlength='200' readonly>$comment</textarea>
	</p>
	<p>
		<input type='submit' value='送信する'>
	</p>
</form>");

?>

</body>
</html>
