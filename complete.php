<?php
  session_start();

  $name = $_SESSION['name'];
  $hobby = $_SESSION['email'];
  $gender = $_SESSION['gender'];
  $dbh = db_conn();

try{ 

$sql = "INSERT INTO user (email, name, gender) VALUE (:email, :name, :gender)"; 

$stmt = $pdo->prepare($sql); 

$stmt->bindValue(':email', $hobby, PDO::PARAM_STR); 

$stmt->bindValue(':name', $name, PDO::PARAM_STR);

$stmt->bindValue(':gender', $gender, PDO::PARAM_INT);
    $stmt->execute(); 

unset($dbh);

}catch (PDOException $e){ 

    echo($e->getMessage()); 

    die(); 

} 
}catch (PDOException $e){ 

    echo($e->getMessage()); 

    die(); 

} 
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>完了画面</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <header>
       <div>
            <h1>完了画面</h1>
       </div>
    </header>
</div>
<hr>
<p>名前は <?php echo $name;?> さん</p>
<p>メールアドレスは <?php echo $hobby;?> </p>

<p>性別は <?php if( $gender === "1" ){ echo '男性'; }
		elseif( $gender === "2" ){ echo '女性'; }
		elseif( $gender === "9" ){ echo 'その他'; }
?> </p>
<p>以上の内容で登録しました。</p>
<form action="index.html" method="POST">
<div class="button-wrapper">
	<button type="submit" class="btn btn--naby btn--shadow">TOPに戻る</button>
</div>
</form>
<hr>
<div class="container">
    <footer>
        <p>CCC.</p>
    </footer>
</div>
</body>
</html>
