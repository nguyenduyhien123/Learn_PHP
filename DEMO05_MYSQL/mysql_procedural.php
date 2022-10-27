<?php
// mysql wordbench
$ser = 'localhost';
$db = 'db_news';
$us_db = 'root';
$pas_db = '';
$conn = mysqli_connect($ser, $us_db, $pas_db, $db);
if (!$conn) {
    echo 'Failed!';
    exit(1);
}
echo 'Successful';
$table = 'categories';
$query = "SELECT * FROM $table";
$result = mysqli_query($conn, $query);
echo '<br>';
// echo '<table>';
// while ($row = mysqli_fetch_assoc($result)) {
//     $id = $row['id'];
//     $name = $row['name'];
//     $slug = $row['slug'];
//     $status = $row['status'];
//     echo '<tr>';
//     echo "<td>$id</td>";
//     echo "<td>$name</td>";
//     echo "<td>$slug</td>";
//     echo "<td>$status</td>";
//     echo '</tr>';
// }
// echo '</table>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySQL - Procedural</title>
    <style>
        td {
            border: 2px solid red;
        }
        table {
            border-collapse: collapse;
        } 
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Col 1</th>
            <th>Col 2</th>
            <th>Col 3</th>
            <th>Col 4</th>
        </tr>
    <?php
   //  array_keys()
    while ($row = mysqli_fetch_assoc($result)) 
    {
    ?>
        <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['slug'];?></td>
            <td><?php echo $row['status'];?></td>
        </tr>
    <?php
    } ?>
    </table>
</body>
</html>