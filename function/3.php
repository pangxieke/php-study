<?php
/**
 * 系统函数的学习，学习function_exists();
 */
if (function_exists('func_get_args')) {
    echo "这个函数已经存在";
}else{
    echo "这个函数不存在";
}
