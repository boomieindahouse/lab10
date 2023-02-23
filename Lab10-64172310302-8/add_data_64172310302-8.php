<?php
require("conDB_64172310302-8.php");

if (isset($_POST['insert'])) {
    $ipet = $_POST['ipet'];
    $npet = $_POST['npet'];
    $wpet = $_POST['wpet'];
    $apet = $_POST['apet'];
    $tpet = $_POST['tpet'];
    $iopet = $_POST['iopet'];
    if (empty($ipet) || empty($npet) || empty($wpet) || empty($apet) || empty($tpet) || empty($iopet)) {
        echo "ข้อมูลไม่ครบ<br>";
    } else {
        if ($result = mysqli_query($conn, "INSERT INTO pet(id_pet, name, weight, age, type, id_owner) VALUES ('$ipet','$npet','$wpet','$apet','$tpet','$iopet')")) {
            echo "เพิ่มข้อมูลสำเร็จ<br>";
        } else {
            echo "เพิ่มข้อมูลไม่สำเร็จ<br>";
        }
    }
    unset($ipet);
    unset($npet);
    unset($wpet);
    unset($apet);
    unset($tpet);
    unset($iopet);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <br>
    <a href="show&add_table_64172310302-8.php">กลับสู่หน้าหลัก</a>
</body>

</html>