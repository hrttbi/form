<?php
	setcookie("data", "", time() - 1);
?>
<!DOCTYPE html>
<html>
<head></head>
<body>

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

$subject="{$name}様からお問い合わせメールが到着致しました";
$body="氏名：{$name}\n電話番号：{$tel}\nメールアドレス：{$email}\nお問い合わせ内容\n{$comment}";
$header="From:".mb_encode_mimeheader("{$name}様")."<{$email}>\r\nContent-Type: text/plain; charset=iso-2022-jp";

$check=mb_send_mail("test@sample.com","$subject","$body","$header","-f test@sample.com");


print($tel);

if($check){
	print("メールを送信できました");
}else{
	print("メールを送信できませんでした");
}

	$d=mysqli_connect("mysql_server.ne.jp","user","password","db")or die("接続失敗".mysqli_error());

	$meirei="insert into contact_data(name,tel,email,comment,del_flg)value('$name','$tel','$email','$comment',0);";

	mysqli_query($d,$meirei);

	print("<br>登録しました");

?>

<a href="contact.php">入力フォームへ戻る</a>

</body>
</html>
