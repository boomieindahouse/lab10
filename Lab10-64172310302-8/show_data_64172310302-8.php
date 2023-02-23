<?php
require("conDB_64172310302-8.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="GUI.css">
</head>

<body>
    <?php
    $result = mysqli_query($conn, "SELECT p.id_pet,p.name,p.weight,p.age,p.type,op.name FROM pet AS p ,owner_pet AS op  WHERE p.id_owner = op.id_owner");
    ?>
    <table class="sd">
    <tr class="sd-b-r">
        <td>รหัสสัตว์</td>
        <td>ชื่อสัตว์</td>
        <td>น้ำหนัก</td>
        <td>อายุ</td>
        <td>ประเภท</td>
        <td>เจ้าของ</td>
    </tr>
        <?php
        while ($row = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td><?php echo htmlspecialchars(stripslashes($row[0])) . " "; ?></td>
                <td><?php echo htmlspecialchars(stripslashes($row[1]))." "; ?></td>
                <td><?php echo htmlspecialchars(stripslashes($row[2]))." "; ?></td>
                <td><?php echo htmlspecialchars(stripslashes($row[3]))." "; ?></td>
                <td><?php echo htmlspecialchars(stripslashes($row[4]))." "; ?></td>
                <td><?php echo htmlspecialchars(stripslashes($row[5]))."<br>"; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
    <br>
    <a href="show&add_table_64172310302-8.php">กลับสู่หน้าหลัก</a>
</body>

</html>