<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
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