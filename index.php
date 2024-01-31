<?php  
    include("./conn.php");

    //display code

    $sql = "SELECT * FROM student";
    $res = mysqli_query($conn, $sql);

    $record = mysqli_fetch_all($res, MYSQLI_ASSOC);
    $num=0;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>

    
    <style>
        table {
            padding: 15px;
            margin: 15px;
            border: 1px solid #000;
        }

        table td {
            padding: 10px;
        }
    </style>

</head>
<body>
    <table>
        <tr>
            <th>SL no</th>
            <th>Name</th>
            <th>Address</th>
            <th>Std</th>
            <th>Email</th>
        </tr>

        <?php foreach($record as $records): ?>
            <tr>
                <td><?php echo $num++; ?></td>
                <td><?php echo $records['name']; ?></td>
                <td><?php echo $records['address']; ?></td>
                <td><?php echo $records['std']; ?></td>
                <td><?php echo $records['email']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>