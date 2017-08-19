<?php
/**
 * 巢装条件语句
 */

//$a = empty($_GET['a']) ? 1 : $_GET['a'];
//$b = empty($_GET['b']) ? 1 : $_GET['b'];

$a=45;	//english
$b=45;	//math

if( $a > 60 )
{
    if( $b > 90 ){
        echo 'good math';
    }else{
        echo 'bad math';
    }
    echo ' good english';
}else
{
    if( $b > 90 ){
        echo 'good math';
    }else{
        echo 'bad math';
    }
    echo ' bad english';
}