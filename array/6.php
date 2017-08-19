<?php
/**
 * array数组循环
 * for循环
 * foreach循环
 * each list 循环
 */

//for
$arr=array(1, 6, 3, 5,20=>34);
$n = count($arr);
for($i=0; $i < 21; $i++){
    if(isset($arr[$i])){
        echo $i . ' ===>' .  $arr[$i].'<br>';		//键值不联系，循环不到20
    }

}

//foreach
foreach($arr as $key=>$val){
    echo $key. '===' .$val. '<br>';
}

reset($arr);									//刚使用foreach循环，键值指针在最后，无法正常输出，需要指针归零
echo '<hr>';
$id=each($arr);
print_r($id);
echo '<hr>';
while(list($a,$b) = each($arr)){
    echo $a . ' ===== ' . $b . '<br>';
}
