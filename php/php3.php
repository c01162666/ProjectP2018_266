<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>課題2</title>
</head>
<body>
<?php

function init_table(){
    $addresses = array(
        array( 'name' => '東京太郎',
               'address' => '東京都',
               'phone' => '012-345-6789',
               'email' => 'taro@example.com',
        ),
        array( 'name' => '工科花子',
               'address' => '北海道',
               'phone' => '987-654-3210',
               'email' => 'hana@example.com', 
        ),
    );
    return $addresses;
}
    
function print_table($table){
    print("<table border='1'>");
    print('<tr><th>名前</th><th>住所</th><th>電話番号</th><th>メール</th></th>');

    foreach($table as $value){
        
        print('<tr>'.
        '<td>'.$value['name'].        '</td>'.
        '<td>'.$value['address'].        '</td>'.
        '<td>'.$value['phone'].      '</td>'.
        '<td>'.$value['email'].       '</td></tr>'
        );
    }  
    print('</table>');
}
$data = init_table();
print_table($data);

?>  

 <!--フォームの表示-->  
 <form action="php3.php" method="post">  
        <p>氏名：<input type="text" name="name" size="40"></p>  
        <p>住所：<input type="text" name="address" size="40"></p>  
        <p>電話番号：<input type="text" name="number" size="40"></p>  
        <p>メール：<input type="text" name="mail" size="40"></p>  
        <p><input type="submit" value="送信"></p>  
    </form>  
</body>
</html>