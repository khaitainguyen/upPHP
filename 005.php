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
        Đọc bài viết về cú pháp switch case
        https://www.w3schools.com/php/php_switch.asp
        Sau đó tạo ra 1 form có 1 ô input
        nhập tháng là 1 số từ 1 đến 12
        ấn submit
        thì in ra tên tiếng anh của tháng đó
        sử dụng cú pháp switch case
        vi dụ
        1 -> Jan
        2 - Feb
        3 -> Mar
        4 => Apr ...
    </pre>

 <?php
 $a = $_POST['thang'];
 echo "<div style='color: blue'>Tên tháng viết lại là: $a</div>";
 switch ($a){
     case 1:
         echo "Jan";
         break;
     case 2:
         echo "Feb";
         break;
     case 3:
         echo "Mar";
         break;
     case 4:
         echo "Apr";
         break;
     case 5:
         echo "May";
         break;
     case 6:
         echo "Jun";
         break;
     case 7:
         echo "Jul";
         break;
     case 8:
         echo "Aug";
         break;
     case 9:
         echo "Sep";
         break;
     case 10:
         echo "Oct";
         break;
     case 11:
         echo "Nov";
         break;
     case 12:
         echo "Dec";
         break;
     default:
         echo "<div style='color: red'>Nhập số tháng không hợp lệ</div>";
         break;
 }
 ?>

<div>
    <form method="post" name="ad" action="">
        <p>
        <label>Nhập tháng dưới dạng chữ số từ 1 đến 12</label>
        <input type="text" name="thang" value="">
        </p>
        <p>
            <input type="submit" name="submit" value="Tên tháng viết theo chữ cái">
        </p>
    </form>
</div>
</body>
</html>