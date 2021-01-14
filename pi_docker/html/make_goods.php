<?php
    //define('DB_DATABASE','test_sb');
    define('DB_USERNAME','TEST');
    define('BD_PASSWORD','test');
    define('PDO_DSN','mysql:host=mariadb_test_pi;dbname=test;charset=utf8' ); 
    
try{
    $db =new PDO(PDO_DSN, DB_USERNAME, BD_PASSWORD);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $goods_name = "tea";
    $goods_num = 100;

    $stmt = $db->prepare("insert into goods ( goods_name, goods_num) values ( :name, :num)");
    $stmt->execute([ ':name'=>$goods_name, ':num'=>$goods_num]);
    echo "inserted:" ;

} catch (PDOException $e) {
    echo $e->getMessage();
    exit;
}
?>