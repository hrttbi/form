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

$check=mb_send_mail("test@sample.com","$subject","$body","$header");

//後で消す
if($check){
	print("お問い合わせ内容を送信しました");
}else{
	print("送信に失敗しました");
}

?>

</body>
</html>
