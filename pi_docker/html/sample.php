<?php
    //define('DB_DATABASE','test_sb');
    define('DB_USERNAME','TEST');
    define('BD_PASSWORD','test');
    define('PDO_DSN','mysql:host=mariadb_test_pi;dbname=test;charset=utf8' ); 
    
try{
    $db =new PDO(PDO_DSN, DB_USERNAME, BD_PASSWORD);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $user_name = "田中";
    $stmt = $db->prepare("insert into user (user_name) values (:name)");
    $stmt->execute([':name'=>$user_name]);
    echo "inserted:" ;

} catch (PDOException $e) {
    echo $e->getMessage();
    exit;
}
?>