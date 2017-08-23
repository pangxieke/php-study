<?php
//	使用for、while、do…while循环分别输出10到20的值

//for
for($i = 10; $i < 21; $i++){
    echo $i . '<br>';
}
echo '<hr>';

// while
$i = 10 ;
while($i < 21){
    echo $i . '<br>';
    $i++;
}
echo '<hr>';

// do while
$i = 10;
do{
    echo $i . '<br>';
    $i++;
}while( $i < 21);
echo '<hr>';