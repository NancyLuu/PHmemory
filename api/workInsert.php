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
         $sql = "INSERT INTO `work`(`ImgAuthorization`, `WorkName`, `WorkClassOne`, `WorkClassTwo`, `WorkDescription`, `DateClass`, `Date`, `Place_address`, `Writer`, `KeyWord`, `MediaClass`, `Creator`, `PlaceClass`, ` OriginalCopyright`,UserId) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $stmt = mysqli_prepare($PenghuMemory->connection, $sql);
        $stmt->bind_param("ssssssssssssssi",$jsonString["ImgAuthorization"],$jsonString["WorkName"],$jsonString["WorkClassOne"],$jsonString["WorkClassTwo"],$jsonString["WorkDescription"],$jsonString["DateClass"],$jsonString["Datev"],$jsonString["Place_address"],$jsonString["Writer"],$jsonString["KeyWord"],$jsonString["MediaClass"],$jsonString["Creator"],$jsonString["PlaceClass"],$jsonString["OriginalCopyright"],$jsonString["uid"]);
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