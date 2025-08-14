<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    $to = 'info@example.com'; // 受信メールアドレス
    $subject = 'お問い合わせ';
    $body = "名前: $name\nメール: $email\n電話: $phone\n内容:\n$message";
    $headers = "From: $email";

    if(mail($to, $subject, $body, $headers)){
        header('Location: thanks.html');
        exit;
    } else {
        $error = '送信に失敗しました。';
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせ - 株式会社youconnect</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/main.js" defer></script>
</head>
<body>

<header>
    <div class="logo">株式会社youconnect</div>
    <nav>
        <ul>
            <li><a href="index.html">トップ</a></li>
            <li><a href="about.html">会社概要</a></li>
            <li><a href="services.html">事業内容</a></li>
            <li><a href="works.html">施工実績</a></li>
            <li><a href="licenses.html">資格認可一覧</a></li>
            <li><a href="contact.php">お問い合わせ</a></li>
            <li><a href="access.html">アクセス</a></li>
        </ul>
    </nav>
</header>

<main>
    <h1>お問い合わせ</h1>

    <?php if(!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>

    <form method="POST" action="contact.php">
        <label>名前: <input type="text" name="name" required></label><br>
        <label>メール: <input type="email" name="email" required></label><br>
        <label>電話: <input type="text" name="phone"></label><br>
        <label>内容:<br><textarea name="message" required></textarea></label><br>
        <button type="submit">送信</button>
    </form>
</main>

<footer>
    <p>&copy; 2025 〇〇電気工事株式会社</p>
    <p>お問い合わせ: info@example.com</p>
</footer>

</body>
</html>
