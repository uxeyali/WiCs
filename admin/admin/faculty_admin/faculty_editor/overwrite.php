<?php
	$user = $_POST['user'];
    $html = $_POST['html'];
    file_put_contents("../../../../faculty/facpages/faculty/".$user.".php", $html . "\r\n");

    $email = $_POST['email'];
    $content1 = $_POST['content1'];
    $content2 = $_POST['content2'];
    $content3 = $_POST['content3'];
    $quote = $_POST['quote'];
    $bio = $_POST['bio'];
    $templateNum = $_POST['template_num'];

	$db = new PDO('mysql:dbname=university;host=localhost','csadmin','cs@dmin84*$');
    $sql = "UPDATE faculty SET email = '$email', content1 = '$content1', content2 = '$content2', content3 = '$content3', quote = '$quote', bio = '$bio', template_num = '$templateNum' WHERE username = '$user';";

    $_write = $db->query($sql);
?>