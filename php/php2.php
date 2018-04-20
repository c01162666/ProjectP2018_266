<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>課題2</title>
</head>
<body>
<?php

    $addresses = array(
        '名前'=>array(
            ,'住所','電話','Email'),
        ('東京太郎','東京都','012-345-6789','taro@example.com'),
        ('工科太郎','北海道','987-654-3210','hana@example.com')
);
    
     print_table($addresses);
?>  
</body>
</html>