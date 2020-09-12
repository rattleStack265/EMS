<?php
require_once("include/ConnectingDB.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="include/style.css">
    <title>Employee Power System</title>
</head>
<body>
    <h2><?php echo @$_GET["id"];?></h2>
    <table width="100%" border="2" align="Center">
        <caption>Ritz Farms Employee Management System</caption>
        <tr>
            <th>Title</th>
            <th>Employee ID</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Password</th>
            <th>Nationality</th>
            <th>City</th>
            <th>Address</th>
            <th>Pincode</th>
            <th>Home Phone</th>
            <th>Work Phone</th>
            <th>Mobile Phone</th>
            <th>Email</th>
            <th>Status</th>
            <th>Super Visor Name</th>
            <th>Hire Date</th>
            <th>Department</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
<?php
    global $connectingDB;
    $sql = "SELECT * FROM users";
    $stmt = $connectingDB->query($sql);
    while($DataRows=$stmt->fetch()){
        $Title =$_POST["title"];
        $EmpId = $_POST["employeeID"];
        $FName = $_POST["firstName"];
        $MName = $_POST["middleName"];
        $LName = $_POST["lastName"];
        $pass = $_POST["password"];
        $nationality = $_POST["nationality"];
        $city = $_POST["city"];
        $address = $_POST["address"];
        $pincode = $_POST["pinCode"];
        $homephone = $_POST["homePhone"];
        $workplacephone = $_POST["workPhone"];
        $mobilephone = $_POST["mobilePhone"];
        $email = $_POST["email"];
        $status = $_POST["status"];
        $supervisor = $_POST["supervisorname"];
        $hiredate = $_POST["hiredate"];
        $department = $_POST["department"];
    
?>
<tr>
    <td><?php echo $Title;?></td>
    <td><?php echo $EmpId;?></td>
    <td><?php echo $FName;?></td>
    <td><?php echo $MName;?></td>
    <td><?php echo $LName;?></td>
    <td><?php echo $pass;?></td>
    <td><?php echo $nationality;?></td>
    <td><?php echo $city;?></td>
    <td><?php echo $address;?></td>
    <td><?php echo $pincode;?></td>
    <td><?php echo $homephone;?></td>
    <td><?php echo $workplacephone;?></td>
    <td><?php echo $mobilephone;?></td>
    <td><?php echo $email;?></td>
    <td><?php echo $status;?></td>
    <td><?php echo $supervisor;?></td>
    <td><?php echo $hiredate;?></td>
    <td><?php echo $department;?></td>
    <td> <a href="Update.php?id=<?php echo $id?>">Update</a></td>
    <td><a href="Delete.php?id=<?php echo $id?>">Delete</a></td>
</tr>
<?php
    }
?>
</table>
<div> 

</div>
</body>
</html>