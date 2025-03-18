<?php
include('connect.php');
if(isset($_POST['submit']))
{
$regno=$_POST['regno'];
$query="select * from student where regno = $regno";
$result = mysqli_query($db_handle,$query);
$record = mysql_fetch_assoc($result);

