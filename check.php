<?php
// URLを直接入力してもindex.phpに画面が戻るように
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    header('Location: index.php');
}
require_once('function.php');

    $nickname = $_POST['nickname'];
    // echo $nickname;
    
    $email = $_POST['email'];
    // echo $email;

    $content = $_POST['content'];
    // echo $content;



if($nickname == ''){
         $nickname_result= 'ニックネームが入力されていません';
 }else{
     $nickname_result= 'ようこそ、'.$nickname.'様';
 }

 if($email ==''){
     $email_result= 'メールアドレスが入力されていません。';
   } else{
         $email_result='メールアドレス:'.$email;
     }

 if($content ==''){
     $content_result ='お問い合わせが入力されていません。';
 }else{
         $content_result = 'お問い合わせ内容'.$content;
 }



?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <title>入力内容確認</title>
    <meta charset="utf-8">
</head>
<body>
    <h1>入力内容確認</h1>
<p><?php echo h($nickname_result); ?></p>
<p><?php echo h($email_result); ?></p>
<p><?php echo h($content_result); ?></p>


<form method="POST" action="thanks.php">

    <input type="hidden" name="nickname" value="<?php echo h($nickname); ?>">
    <input type="hidden" name="email" value="<?php echo h($email); ?>">
    <input type="hidden" name="content" value="<?php echo h($content); ?>">
    <input type="button" value= "戻る" onclick="history.back()">
    <?php if($nickname !='' && $email !='' && $content !=''): ?>
        <input type="submit" value="OK" >
    <?php endif; ?>

    
</form>

</body>
</html>