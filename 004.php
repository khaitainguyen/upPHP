<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 <pre>
        Tạo ra 1 form và sử dụng $_POST
        form có 1 ô input để nhập kích thước
        2 cạnh a và cạnh b của Hình chữ nhật
        Submit sẽ tính ra :
        - chu vi và diện tích Hình chữ nhật đó
 </pre>
<?php
$cc = $_POST['chieucao'];
$cr = $_POST['chieurong'];
$chuvi = ($cc + $cr)/2;
$dientich = $cc * $cr;

echo "<div style='color: blue'>Chu vi hình chữ nhật là : $chuvi (m)</div>";

echo "<div style='color: blue'>Diện tích hình chữ nhật là : $dientich (m2)</div>";
?>




<div>
    <form name="cd" action="" method="post">
        <p>
            <label>Nhập chiều cao hình chữ nhật(mét)</label>
            <input name="chieucao" value="" type="text">
        </p>
        <p>
            <label>Nhập chiều rộng hình chữ nhật ( mét)</label>
            <input name="chieurong" value="" type="text">
        </p>
        <p>
            <input name="submit" type="submit" value="Tính chu vi và diện tích">
        </p>

    </form>
</div>
</body>
</html>