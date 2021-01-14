<?php
    //define('DB_DATABASE','test_sb');
    define('DB_USERNAME','TEST');
    define('BD_PASSWORD','test');
    define('PDO_DSN','mysql:host=localhost; dbname=test;charset=utf8' ); 

try{
    $db =new PDO(PDO_DSN, DB_USERNAME, BD_PASSWORD);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $stmt = $db->prepare("insert into user (user_name) values (:name)");
    $stmt->execute([':name'=>'中村']);
    echo "inserted:" . $db->lastInsertId();

} catch (PDOException $e) {
    echo $e->getMessage();
    exit;
}
?>