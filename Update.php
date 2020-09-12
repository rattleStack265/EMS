<?php
require_once("include/ConnectingDB.php");
$searchQueryParameter = isset($_GET['id']) ? $_GET['id'] : '';
if(isset($_POST["Submit"])){
        $EName = $_POST["EName"];
        $SSN = $_POST["SSN"];
        $Dept = $_POST["Dept"];
        $Job_desc = $_POST["Job_Desc"];
        $HomeAddress = $_POST["homeAddress"];

        $connectingDB;
        $sql = "UPDATE emp_record SET ename='$EName', ssn='$SSN', dept='$Dept', job_desc='$Job_desc', homeaddress='$HomeAddress' WHERE id='$searchQueryParameter'";
        $Execute = $connectingDB->query($sql);
        if($Execute){
            echo '<script>window.open("view_from_database.php?id=Record Updated successfully","_self")</script>';
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
<?php
    $connectingDB;
    $sql = "SELECT * FROM emp_record WHERE id='$searchQueryParameter'";
    $stmt=$connectingDB->query($sql);
    while($DataRows = $stmt->fetch()){
        $id = $DataRows["id"];
        $EName = $DataRows["ename"];
        $SSN = $DataRows["ssn"];
        $Department = $DataRows["dept"];
        $Job_description = $DataRows["job_desc"];
        $HomeAddress = $DataRows["homeaddress"];
    }
?>
    <div>
    <h2>Ritz Farms Employee Management System</h2>
        <form action="Update.php?id=<?php echo $searchQueryParameter; ?> method="post">
            <fieldset>
                <span>Employee Name:</span>
                <br>
                <input type="text" name="EName" id="" value="<?php echo(isset($EName)?$EName:""?>">
                <br>

                <span>Social Security Number:</span>
                <br>
                <input type="text" name="SSN" id="" value="<?php echo $SSN;?>">
                <br>

                <span>Department:</span>
                <br>
                <input type="text" name="Dept" id="" value="<?php echo $Department;?>">
                <br>

                <span>Job Description:</span>
                <br>
                <input type="text" name="Job_Desc" id="" value="<?php echo $Job_description;?>">
                <br>

                <span>Home Address:</span>
                <br>
                <textarea name="homeAddress" id="" cols="80" rows="8"><?php echo $HomeAddress;?></textarea>
                <br>
                <input type="submit" value="Submit Record" name="Submit">
            </fieldset>
        </form>
    </div>
</body>
</html>