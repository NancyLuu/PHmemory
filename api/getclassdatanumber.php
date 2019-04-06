<?php session_start(); ?>
<?php
require_once("apiPaper.php");
$uid = $_POST["id"];
$PenghuMemory = new Database("penghumemory", "root", "");
$classnum = new stdClass();
$class=array("work","video","organization","space","people","activity");
foreach ($class as $value) 
{
    $sql = "SELECT COUNT(".$value."id) as num from ".$value." where  UserId = ".$uid;
    $stmt = mysqli_prepare($PenghuMemory->connection, $sql);
    #$stmt->bind_param("s",$value);
    $stmt->execute();
    $result = sqlGetResult($stmt);
    #print_r($result); 
    if(count($result)>0)
    {
       $classnum->{$value} = (string)$result[0]["num"];
    }

}
echo rawJsonEncode($classnum, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);
?>