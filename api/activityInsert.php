<?php session_start(); ?>
<?php
require_once("apiPaper.php");
$PenghuMemory = new Database("penghumemory", "root", "");
if(empty($_POST["data"]))
{
    echo '{"success":"N"}';
}
else
{
    $jsonString = $_POST["data"];
    #$dataObj=json_decode($jsonString); 
    #print_r($jsonString);
   if(count($jsonString))
    {
         $sql = "INSERT INTO `activity`(`ImgAuthorization`, `ActivityName`, `ActivityClassOne`, `ActivityClassTwo`, `ActivityDescription`, `StartTime`, `FinishTime`, `Place_address`, `Writer`,`KeyWord`,UserId) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
        $stmt = mysqli_prepare($PenghuMemory->connection, $sql);
        $stmt->bind_param("ssssssssssi",$jsonString["ImgAuthorization"],$jsonString["ActivityName"],$jsonString["ActivityClassOne"],$jsonString["ActivityClassTwo"],$jsonString["ActivityDescription"],$jsonString["StartTime"],$jsonString["FinishTime"],$jsonString["Place_address"],$jsonString["Writer"],$jsonString["KeyWord"],$jsonString["uid"]);
        $stmt->execute();
        if($stmt->insert_id >0)
        {
            echo '{"success":"Y"}';
        }
        else
        {
            echo '{"success":"N"}';
        }

        #awJsonEncode($dataObj, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);
    }
}
?>