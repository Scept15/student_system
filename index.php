<?php


$host = "localhost";
$username = "Scept15";
$password = "Olegario15";
$database = "student_system";

$con = new mysqli($host, $username, $password, $database);

if($con->connect_error){
    echo $con->connect_error;
}


$sql = "SELECT * FROM student_list";
$students = $con->query($sql) or die ($con->error);
$row = $students->fetch_assoc();


// do{

//     echo $row["id"]."."." ".$row["firstname"]." ".$row["lastname"]." <br> <br>";

// }while($row = $students->fetch_assoc());

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link rel="stylesheet" href="css/sms.css">
    <link rel="stylesheet" href="index.php">
</head>
<body>
    <h1>Student Management System</h1>
    <br>
    <br>
    <table>
        <thead></thead>
        <tr>
            <th>
                First Name
            </th>
            <th>
                Last Name
            </th>
        </tr>
    </thead>
    <tbody>
        <?php do{  ?>
        <tr>
            <td>
                <?php echo $row["firstname"]; ?>
            </td>
            <td>
                <?php echo $row["lastname"]; ?>
            </td>
        </tr>
        <?php }while($row = $students->fetch_assoc());  ?>
    </tbody>
    </table>
</body>
</html>

