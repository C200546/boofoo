function db_conn() { 

    /* データベース定義 */ 

    define('DSN','mysql:host=localhost;dbname=lesson1;charset=utf8mb4'); 

    define('DB_USER','root'); 

    define('DB_PASS',''); 

    /* データベースに接続　*/ 

    try { 

        [データベース接続処理] 
        $dbh = new PDO(DSN,DB_USER,DB_PASS);
        
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

        $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); 

    } catch (PDOException $e){ 

        echo $e->getMessage(); 

        exit; 

    } 

    return $dbh; 

} 

 
