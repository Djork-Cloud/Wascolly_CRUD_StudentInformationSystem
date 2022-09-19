<?php
require_once("connect.php");
$sql = "SELECT * FROM student ORDER BY userID DESC";
$result = mysqli_query($conn,$sql);
?>

<html>
<head>
<title>Student Information System</title>
<link rel="stylesheet" type="text/css" href="_css/style.css"/>
</head>

<body style="backgrond-color:lightblue;">
    <center>
<h1 style="color:blue;">Federal Polytechnic Ede <br /> Student Information System</h1>
<form name="frmUser" method="post" action="">
<div style="width:877px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<div align="center" style="padding-bottom:20px;"><a href="create.php" class="link"><img alt='Add' title='Add' src='_icon/add.png' width='16px' height='16px'/>Create New Student</a></div>
<table border="0" cellpadding="15" cellspacing="1" width="740px" class="tblListForm">

<tr class="listheader">
<td>Student No.</td>
<td>Last Name</td>
<td>First Name</td>
<td>Middle Name</td>
<td>Gender</td>
<td>Address</td>
<td>Phone No.</td>
<td>Course</td>
<td>Department</td>
<td>Year</td>
<td>Actions</td>
</tr>

<?php
$i=0;
while($row = mysqli_fetch_array($result)){
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>

<tr class="<?php if(isset($classname)) echo $classname;?>" style="background-color:lightgreen;">
<td><?php echo $row["studentNo"]; ?></td>
<td><?php echo $row["lastname"]; ?></td>
<td><?php echo $row["firstname"]; ?></td>
<td><?php echo $row["middlename"]; ?></td>
<td><?php echo $row["gender"]; ?></td>
<td><?php echo $row["homeAddress"]; ?></td>
<td><?php echo $row["contactNo"]; ?></td>
<td><?php echo $row["course"]; ?></td>
<td><?php echo $row["department"]; ?></td>
<td><?php echo $row["year"]; ?></td>
<td><a href="update.php?userID=<?php echo $row["userID"]; ?>" class="link"><img alt='Update' title='Update' src='_icon/update.png' width='15px' height='15px' hspace='10'/>UPDATE</a>
    <a href="delete.php?userID=<?php echo $row["userID"]; ?>"  class="link"><img alt='Delete' title='Delete' src='_icon/delete.png' width='15px' height='15px'hspace='10'/>DELETE</a>
</td>
</tr>

<?php
$i++;
}
?>

</table>
</form>
</div>
</center>
<footer>
   <center> <p style="font-weight:bold;"> Developed By:- LAWAL WASIU OLAWALE - HC20200202368 - HND II DPT - Computer Science Department</p></center>
   
</footer>
</body>

</html>