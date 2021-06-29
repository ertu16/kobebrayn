<?php include 'header.php'; ?>

<?php

$g_id = $_POST["yorumid"];
$g_onay=1;
    $baglanti = new PDO("mysql:host=localhost;dbname=mydb", "root", "12345678");
    $baglanti->exec("SET NAMES utf8");
    $baglanti->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $sorgu = $baglanti->prepare("UPDATE yorum SET onay = ? WHERE id = ?");

      $sorgu->bindParam(1, $g_onay, PDO::PARAM_STR);
$sorgu->bindParam(2, $g_id, PDO::PARAM_STR);
      $sorgu->execute();


             header("Location:yorumonay.php");


?>




       <?php include 'footer.php'; ?>