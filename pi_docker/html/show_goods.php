<?php
    //define('DB_DATABASE','test_sb');
    define('DB_USERNAME','TEST');
    define('BD_PASSWORD','test');
    define('PDO_DSN','mysql:host=mariadb_test_pi;dbname=test;charset=utf8' ); 
    
try{
    $db =new PDO(PDO_DSN, DB_USERNAME, BD_PASSWORD);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $db->prepare("select * from goods");
    $stmt->execute([]);

    while($value=$stmt->fetch(PDO::FETCH_ASSOC)){
        echo "$value[goods_name],";
        echo "$value[goods_num],";
        echo "<br>";
    }
    echo $stmt->rowCount() . "records found.";

} catch (PDOException $e) {
    echo $e->getMessage();
    exit;
}
?>