<?php
/**
 * 输出星期几
 */
$a=$_GET['day'];
if( $a == 1 ):
    echo "这是星期1";
elseif( $a == 2 ):
    echo "这是星期2";
elseif( $a == 3 ):
    echo "这是星期3";
elseif( $a == 4 ):
    echo "这是星期4";
elseif( $a == 5 ):
    echo "这是星期5";
elseif( $a == 6 ):
    echo "这是星期6";
else:
    echo "这是星期日";
endif;

echo '<hr>';
/**
 * 另外一种方法
 * 注意判定的顺序，从条件最小的开始判断
 */
$a = empty($_GET['day']) ? 1 : $_GET['day'];
if( $a > 6 ):
    echo 'this is sunday';
elseif( $a >5 ):
    echo 'this is saturday';
elseif( $a >4 ):
    echo 'this is friday';
elseif( $a >3 ):
    echo 'this is thursday';
elseif( $a >2 ):
    echo 'this is wednesday';
elseif( $a >1 ):
    echo 'this is tuesday';
else:
    echo 'this is monday';
endif;