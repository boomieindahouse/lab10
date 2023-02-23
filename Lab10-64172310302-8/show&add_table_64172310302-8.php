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
    <div class="sdt-g">
        <form action="show_data_64172310302-8.php" method="post">
            <H1>แสดงข้อมูลสัตว์เลี่ยง</H1>
            <input type="submit" value="แสดงข้อมูล">
        </form>
    </div>
    <div class="sdt-i">
        <form action="add_data_64172310302-8.php" method="POST">
            <H1>เพิ่มข้อมูลสัตว์เลี้ยง</H1>
            <table>
                <tr>
                    <td class="sdt-i-td-1">รหัสสัตว์:</td>
                    <td class="sdt-i-td-2"><input type="text" name="ipet" id=""></td>
                </tr>
                <tr>
                    <td class="sdt-i-td-1">ชื่อสัตว์:</td>
                    <td class="sdt-i-td-2"><input type="text" name="npet" id=""></td>
                </tr>
                <tr>
                    <td class="sdt-i-td-1">น้ำหนัก:</td>
                    <td class="sdt-i-td-2"><input type="text" name="wpet" id=""></td>
                </tr>
                <tr>
                    <td class="sdt-i-td-1">อายุ:</td>
                    <td class="sdt-i-td-2"><input type="text" name="apet" id=""></td>
                </tr>
                <tr>
                    <td class="sdt-i-td-1">ประเภท:</td>
                    <td class="sdt-i-td-2"><input type="text" name="tpet" id=""></td>
                </tr>
                <tr>
                    <td class="sdt-i-td-1">รหัสเจ้าของ:</td>
                    <td class="sdt-i-td-2"><input type="text" name="iopet" id=""></td>
                </tr>
            </table>
            <input type="submit" name="insert" value="เพิ่มข้อมูล">
        </form>
    </div>
</body>

</html>