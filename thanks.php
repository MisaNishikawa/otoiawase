<?php
// URLを直接入力してもindex.phpに画面が戻るように
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    header('Location: index.php');
}
require_once('function.php');


    $nickname = $_POST['nickname'];
    $email = $_POST['email'];
    $content = $_POST['content'];

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <title>送信完了</title>
    <meta charset="utf-8">
</head>
<body>
    <h1>お問い合わせありがとうございました！</h1>
    <p><?php echo h($nickname); ?></p>
    <p><?php echo h($email); ?></p>
    <p><?php echo h($content); ?></p>

</body>
</html>