<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>課題2</title>
</head>
<body>
<?php

function init_table(){
    $addresses = array();

    if(file_exists("addresses.json")){

        $text = file_get_contents("addresses.json");
        $addresses = json_decode($text,true);
    }
    return $addresses;
    
}
    
function print_table($table){
   // print(json_encode($table,JSON_UNESCAPED_UNICODE));
    print("<table border='1'>");
    print('<tr><th>名前</th><th>住所</th><th>電話番号</th><th>メール</th></th>');

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        array_push($table,$_POST);
        file_put_contents('addresses.json' ,json_encode($table, JSON_UNESCAPED_UNICODE));
     
    }
    
    foreach($table as $value){
      //  var_dump($value);

       
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
 <form action="php5.php" method="post">  
        <p>氏名：<input type="text" name="name" size="40"></p>  
        <p>住所：<input type="text" name="address" size="40"></p>  
        <p>電話番号：<input type="text" name="phone" size="40"></p>  
        <p>メール：<input type="text" name="email" size="40"></p>  
        <p><input type="submit" value="送信"></p>  
    </form>  
</body>
</html>