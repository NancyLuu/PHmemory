<?php session_start(); ?>
<?php
if($_SESSION['UserName'] == null || $_SESSION['RealName'] == null || $_SESSION['isAdmin'] == null || $_SESSION['UserId'] == null)
{
	header("Location: api/member_Logout.php"); 
	exit;
}
?>

<?php
echo "successful login!!!!    <a href='api/member_Logout.php'>登出</a><br>";
echo "<a href='api/member_Logout.php'>人物資料</a><br>";
echo "<a href='api/member_Logout.php'>作品文物資料</a><br>";
echo "<a href='api/member_Logout.php'>空間資料</a><br>";
echo "<a href='api/member_Logout.php'>活動事件資料</a><br>";
echo "<a href='api/member_Logout.php'>組織資料</a><br>";
echo "<a href='api/member_Logout.php'>影音資料</a><br>";
?>