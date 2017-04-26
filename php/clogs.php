<?php
error_reporting(0);
$did = $_REQUEST['did'];
include("connect.php");
include("session.php");
$did = $_REQUEST['did'];
$result = mysqli_query($conn, "SELECT c.id,c.email,c.date_publish,c.comments,u.name FROM comments c,user u where c.email=u.email AND D_ID='".$did."' ORDER BY c.id ASC");
while($row=mysqli_fetch_array($result)){
?>
<div class='comments_content'>
<?php if($row['email']==$_SESSION['login_user']){?>
<h4 class="X"><a href='../php/deletec.php?id=<?php echo "".$row['id'] ?>'> X</a></h4>
<?php }?>
<h1 class="name"><?php echo $row['name'] ?></h2>
<h5 class="dat"><?php echo $row['date_publish'] ?></h5>
<h4 class="com"><?php echo $row['comments'] ?></h4>
</div>
<?php
}
mysqli_close($conn);
?>