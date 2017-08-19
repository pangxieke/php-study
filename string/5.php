<?php
/*
 * switch分支机构
 *  switch(){
 *      case 1 : break;
 *      case 2 : break;
 *      default:
 *
 * }
 */
$a = empty($_GET['day']) ? 1 :$_GET['day'];

switch($a){
    case 1:
        echo " this is monday";
        break;
    case 2:
        echo " this is tuesday";
        break;
    case 3:
        echo " this is wednesday";
        break;
    case 4:
        echo " this is thursday";
        break;
    case 5:
        echo " this is friday";
        break;
    case 6:
        echo " this is saturday";
        break;
    default:
        echo "this is sunday";
}