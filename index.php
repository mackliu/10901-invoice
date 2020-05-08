<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>統一發票管理系統</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<?php include "./include/header.php"    ;?>

<form action="save_invoice.php" method="post">
    期別:
    <select name="period" >
        <option value="1">1,2月</option>
        <option value="2">3,4月</option>
        <option value="3">5,6月</option>
        <option value="4">7,8月</option>
        <option value="5">9,10月</option>
        <option value="6">11,12月</option>
    </select>
    年份:
    <select name="year">
        <option value="2020">2020</option>
        <option value="2021">2021</option>
        <option value="2022">2022</option>
    </select>
    獎號:
    <input type="text" name="code">
    <input type="number" name="number">

    花費:
    <input type="number" name="expend">
    <input type="submit" value="儲存">
</form>
</body>
</html>