<?php
$b = "POLYTECHNIC";
$a = " FPT POLY";
//echo $b.$a;
//mảng tuần tự
$mang = array(0,1,2,3,4,5,67,78);
// hiển thị ra phần
// từ 6 và  7
//echo $mang[6].$mang[7];
//hiển thị những phần tử trong mảng là số chẵn sử dụng foreach để duyệt mảng
// mảng liên hợp $key=>$value
$manglh = ["G"=>10,"F"=>3,"H"=>9,"J"=>4];
//echo $manglh["F"];
//echo $manglh["J"];
$color = ["green"=>"Xanh lá","blue"=>"Xanh dương","red"=>"đỏ"];
//yêu cầu tạo ra 1 bảng mỗi dòng chứa tên màu bằng tiếng việt và
// mỗi 1 dòng có màu tương ứng với tên màu đó
?>
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
    <table border="1">
        <?php foreach ($color as $key=>$value) { ?>
        <tr>
            <td style="background-color: <?php echo $key; ?>;"><?php echo  $value;?> </td>
        </tr>
        <?php } ?>

    </table>
</body>
</html>
