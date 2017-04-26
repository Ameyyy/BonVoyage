<?php
error_reporting(0);
include("connect.php");
include("session.php");
$did = $_REQUEST['did'];
$result = mysqli_query($conn, "SELECT c.id,c.email,c.date_publish,c.comments,d.name FROM comments c,destination d where c.D_ID=d.D_ID AND c.email='".$_SESSION['login_user']."'ORDER BY c.id ASC");
while($row=mysqli_fetch_array($result)){
?>
<div class='comments_content'>
<h4 class="X"><a href='../php/deletec.php?id=<?php echo "".$row['id'] ?>'> X</a></h4>
<h1 class="name"><?php echo $row['name'] ?></h2>
<h5 class="dat"><?php echo $row['date_publish'] ?></h5>
<h4 class="com"><?php echo $row['comments'] ?></h4>
</div>
<?php
}
mysqli_close($conn);
?>