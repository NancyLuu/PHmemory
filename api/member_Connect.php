<?php session_start(); ?>
<?php

$id = $_POST['id'];
$pw = $_POST['pw'];
if($id == null){
	echo "login.php?error=帳號或密碼錯誤"; 
	exit;
}

if($pw == null){
    echo "login.php?error=帳號或密碼錯誤"; 
    exit;
}

if(!is_string($id) or !is_string($pw)){
	echo "login.php?error=帳號或密碼錯誤"; 
	exit;
}
 
$chars = str_split($id);
foreach($chars as $char){
    if(!(ord($char)>=48 && ord($char)<=57 || ord($char)>=65 && ord($char)<=90 || ord($char)>=97 && ord($char)<=122)){
		echo "login.php?error=帳號或密碼錯誤"; 
	   	exit;
    }
}

require_once("apiPaper.php");
$PenghuMemory = new Database("penghumemory", "root", "");

$pwHash512 = $pw;

$id = mysqli_real_escape_string($PenghuMemory->connection,$id);
$pwHash512 = mysqli_real_escape_string($PenghuMemory->connection,$pwHash512);

$sql = "SELECT * FROM users WHERE UserAc LIKE ?";
$stmt = mysqli_prepare($PenghuMemory->connection, $sql);
$stmt->bind_param("s", $id);
$stmt->execute();
$result = sqlGetResult($stmt);
#print_r($stmt); 
if(count($result)>0)
{
    if($result[0]['UserAc'] == $id && $result[0]['UserPw'] == $pwHash512)
    {
        $_SESSION['UserId'] = $result[0]['UserId'];
        $_SESSION['UserName'] = $id;
        $_SESSION['RealName'] = $result[0]['UserRealNmae'];
        if($result[0]['Role']=='administrator')
            $_SESSION['isAdmin'] = "Y";
        else
            $_SESSION['isAdmin'] = "N";
        
        echo "list-works.php";
    }
    else{
        echo "login.php?error=帳號或密碼錯誤"; 
    }
}
else{
        echo "login.php?error=帳號或密碼錯誤"; 
    }

?>