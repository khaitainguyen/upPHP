
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
    Mảng đa chiều là mảng có mỗi phàn tử bên trong lại là mảng con
</pre>

<?php

$cities = [];
$cities[1] = ['ten' => 'Hà Nội' , 'danso' => 1000000, 'GDP' => 200000000];
$cities[2] = ['ten' =>' Hồ Chí Minh' , 'danso' => 1800000, 'GDP' => 400000000];
$cities[3] = ['ten' => 'Đà Nẵng' , 'danso' => 200000, 'GDP' => 100000000];

$cities[1]['quanhuyen']=['Hoàn Kiếm', 'Tây Hồ', 'Hoàng Mai'];
$cities[2]['quanhuyen']=['Quân 1', 'Thủ Đức', 'Quận 12'];
$cities[3]['quanhuyen']=['Ngũ Hành Sơn', 'Sơn Trà'];
echo '<pre>';
print_r($cities);
echo '</pre>';

// truy cập vào các phần tử bên trong mảng
?>
<div>
    Thông tin Hồ Chí Minh:
    <br> Tên:
    <?php echo $cities[2]['ten']; ?>
    <br> Dân số:
    <?php echo $cities[2]['danso']; ?>
    <br> GDP:
    <?php echo $cities[2]['GDP']; ?>
    <br> Quận:
    <?php echo $cities[2]['quanhuyen'][0]; ?>
    <br> Quận:
    <?php echo $cities[2]['quanhuyen'][1]; ?>
    <br> Quận:
    <?php echo $cities[2]['quanhuyen'][2]; ?>
</div> <br>
<div>
    Thông tin Đà Nắng:
    <br> Tên:
    <?php echo $cities[3]['ten']; ?>
    <br> Dân số:
    <?php echo $cities[3]['danso']; ?>
    <br> GDP:
    <?php echo $cities[3]['GDP']; ?>
    <br> Quận:
    <?php echo $cities[3]['quanhuyen'][0]; ?>
    <br> Quận:
    <?php echo $cities[3]['quanhuyen'][1]; ?>
</div>
</body>
</html>
