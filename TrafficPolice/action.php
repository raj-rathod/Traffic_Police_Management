<?php
    session_start();
$con=mysqli_connect('localhost','root','','traffic');
if (isset($_POST['submit'])) {
	$pname=$_POST['name'];
	$uname=$_POST['uname'];
	$post=$_POST['post'];
	$pid=$_POST['pid'];
	$pno=$_POST['pno'];
	$email=$_POST['email'];
	$psw=$_POST['psw'];
	$sql="SELECT * FROM p_info WHERE uname='$uname'AND post_id='$pid'";
	$run=mysqli_query($con,$sql);
	if (mysqli_num_rows($run)>0) {
		echo "Username and Post id already exist";
	}else{
		$sql="INSERT INTO `p_info` (`p_id`, `uname`, `pname`, `post`, `post_id`, `pno`, `email`, `psw`) 
		VALUES (NULL, '$uname', '$pname', '$post', '$pid', '$pno', '$email', '$psw')";
		$run=mysqli_query($con,$sql);
		if ($run) {
			header('location:login.php');
		}
	}
}
if (isset($_POST['login'])) {
	$uname=$_POST['name'];
	$psw=$_POST['psw'];
	$sql="SELECT * FROM p_info WHERE uname='$uname'AND psw='$psw' ";
	$run=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($run);
	if (mysqli_num_rows($run)==1) {
		$_SESSION['pid']=$row['p_id'];
		$_SESSION['uname']=$row['uname'];
		$_SESSION['pname']=$row['pname'];
		header('location:../home.php');
	}

}
if (isset($_POST['client'])) {
	$pid=$_SESSION['pid'];
    $uname=$_POST['name'];
    $adds=$_POST['add'];
    $aid=$_POST['aid'];
    $phone=$_POST['pno'];
    $email=$_POST['email'];
    $date=date("Y-m-d");
    $sql="INSERT INTO `u_info` (`uid`, `pid`, `name`, `adds`, `pno`, `aids`, `email` ,`challandate`) 
    VALUES (NULL, '$pid', '$uname', '$adds', '$phone', '$aid', '$email','$date')";
    $run=mysqli_query($con,$sql);
    if ($run) {
    	$_SESSION['uid']=mysqli_insert_id($con);
    	header('location:vehicledetail.php');
    }
}
if (isset($_POST['vdetail'])) {
	$vname=$_POST['vname'];
	$vno=$_POST['vno'];
	$vmodel=$_POST['vmodel'];
	$vtype=$_POST['vtype'];
	$pid=$_SESSION['pid'];
	$uid=$_SESSION['uid'];
	$sql="INSERT INTO `vehicle_detail` (`vid`, `uid`, `vname`, `vhno`, `vtype`, `vmodel`, `pid`, `ccost`, `cdesc`) 
	VALUES (NULL, '$uid', '$vname', '$vno', '$vtype', '$vmodel', '$pid', '0', '0')";
	$run=mysqli_query($con,$sql);
	if($run){
		header('location:../challan.php');
	}
}
if (isset($_POST['update'])) {
   $cost=$_POST['sum'];
   $pid=$_SESSION['pid'];
   $uid=$_SESSION['uid'];
   $sql="UPDATE vehicle_detail SET ccost='$cost' WHERE pid='$pid'AND uid='$uid'";
   $run=mysqli_query($con,$sql);
   if ($run) {
     echo "Take print out onclick final button";
   }
}
if (isset($_POST['pdt'])) {
	$pid=$_SESSION['pid'];
	$pdate=$_POST['pdate'];
	$sql="SELECT * FROM u_info WHERE challandate='$pdate'AND pid='$pid'";
	$run=mysqli_query($con,$sql);
	if (mysqli_num_rows($run)==0) {
		echo "<h3 class='text-white text-center'> Result Not found</h3>";
	}else{
	while($row=mysqli_fetch_array($run)){
       $uid=$row['uid'];
       $name=$row['name'];
       $add=$row['adds'];
       $date=$row['challandate'];
       $sql1="SELECT * FROM vehicle_detail WHERE uid='$uid'AND pid='$pid'";
       $run1=mysqli_query($con,$sql1);
       $rows=mysqli_fetch_array($run1);
       $vname=$rows['vname'];
       $vno=$rows['vhno'];
       $challancost=$rows['ccost'];
        echo "  <div class='row'>
          <div class='col-md-2'>
            <h3 class='text-center text-white'> $name</h3>
          </div>
          <div class='col-md-2'>
            <h3 class='text-center text-white'>$add</h3>
          </div>
          <div class='col-md-2'>
            <h3 class='text-center text-white'>$vname</h3>
          </div>
          <div class='col-md-2'>
            <h3 class='text-center text-white'>$vno</h3>
          </div>
          <div class='col-md-2'>
            <h3 class='text-center text-white'>$challancost</h3>
          </div>
          <div class='col-md-2'>
            <h3 class='text-center text-white'>$date</h3>
          </div>
        
        </div><br>";
	}
  }	
}
?>