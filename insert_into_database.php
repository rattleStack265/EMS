<?php
require_once("include/ConnectingDB.php");
if(isset($_POST["Submit"])){
    if(!empty($_POST["firstName"]) &&!empty($_POST["password"])){
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

        $connectingDB;
        $sql = "INSERT INTO users(title,EmployeeId,firstName,middlename,lastname,nationality,address,city,pincode,homephone,workplacephone,mobileohone,email,status,supervisor,hiredate,department,birthdate,gender,maritalstatus,password)
        VALUES(:Title,:EmpId,:FName,:MName,:LName,:pass,:nationality,:city,:address,:pincode,:homephone,:workplacephone,:mobilePhone,:email,:status,:supervisor,:hiredate,:department)";

        $stmt = $connectingDB->prepare($sql);
        $stmt->bindValue('title',$Title);
        $stmt->bindValue('employeeID',$EmpId);
        $stmt->bindValue('firstName',$FName);
        $stmt->bindValue('middleName',$MName);
        $stmt->bindValue('lastName',$LName);
        $stmt->bindValue('password',$pass);
        $stmt->bindValue('nationality',$nationality);
        $stmt->bindValue('city',$city);
        $stmt->bindValue('address',$address);
        $stmt->bindValue('pinCode',$pincode);
        $stmt->bindValue('homePhone',$homephone);
        $stmt->bindValue('workPhone',$workplacephone);
        $stmt->bindValue('mobilePhone',$mobilephone);
        $stmt->bindValue('email',$email);
        $stmt->bindValue('status',$status);
        $stmt->bindValue('supervisorname',$supervisor);
        $stmt->bindValue('hiredate',$hiredate);
        $stmt->bindValue('department',$department);
        $Execute = $stmt->execute();
        if($Execute){
            echo '<span>Record Added to Database Table</span>';
        }
    }else{
        echo '<span>Please Insert Values into the fields</span>';
    }
}
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
    <div>
    <h2>Ritz Farms Employee Management System</h2>
        <form action="insert_into_database.php" method="post">
            <fieldset>

                <span>Title:</span>
                <br>
                <input type="checkbox" name="title" id="">
                <br>

                <span>Employee ID:</span>
                <br>
                <input type="text" name="employeeID" id="">
                <br>

                <span>First Name:</span>
                <br>
                <input type="text" name="firstName" id="">
                <br>

                <span>Middle Name:</span>
                <br>
                <input type="text" name="middleName" id="">
                <br>

                <span>Last Name:</span>
                <br>
                <input type="text" name="lastName" id="">
                <br>

                <span>Password:</span>
                <br>
                <input type="password" name="password" id="">
                <br>

                <span>Nationality:</span>
                <br>
                <input type="text" name="nationality" id="">
                <br>

                <span>City:</span>
                <br>
                <input type="text" name="city" id="">
                <br>

                <span>Address:</span>
                <br>
                <input type="text" name="address" id="">
                <br>

                <span>Pin Code:</span>
                <br>
                <input type="text" name="pinCode" id="">
                <br>

                <span>Home Phone:</span>
                <br>
                <input type="text" name="homePhone" id="">
                <br>

                <span>Work Place Phone:</span>
                <br>
                <input type="text" name="workPhone" id="">
                <br>

                <span>Mobile Number:</span>
                <br>
                <input type="text" name="mobilePhone" id="">
                <br>

                <span>Email:</span>
                <br>
                <input type="email" name="email" id="">
                <br>

                <span>Status:</span>
                <br>
                <input type="text" name="status" id="">
                <br>

                <span>Supervisor Name:</span>
                <br>
                <input type="text" name="supervisorname" id="">
                <br>

                <span>Hire Date:</span>
                <br>
                <input type="date" name="hiredate" id="">
                <br>

                <span>Department:</span>
                <br>
                <input type="text" name="department" id="">
                <br>

                <span>Gender</span>
                <br>
                <input type="checkbox" name="gender" id="">
                <br>

                <span>Birth Date:</span>
                <br>
                <input type="date" name="birthdate" id="">
                <br>

                <span>Marital Status</span>
                <br>
                <input type="checkbox" name="maritalstatus" id="">
                <br>

                <input type="submit" value="Submit Record" name="Submit">
            </fieldset>
        </form>
    </div>
</body>
</html>