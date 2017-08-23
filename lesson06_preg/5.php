<?php
$str = "[b]跟我嗨起来！[/b]树上的朋友，山下的朋友，请举起你们的双手，让我看到你们好吗？
	[font color='red' size='7']动刺大刺，动刺大刺[/font]，AV8D，上面的朋友和我一起，万，吐，死瑞，佛，康忙卑鄙，[a href='http://www.lampbrother.net']赖次够[/a]，苍茫的天涯是我滴爱…………";


$pattern = array(
    '/\[b\](.*)\[\/b\]/',
    '/\[font(.*)\](.*)\[\/font\]/',
    '/\[a(.*)\](.*)\[\/a\]/',
);

$match = array(
    '<b>$1</b>',
    '<font $1>$2</font>',
    '<a$1>$2</a>',

);

echo preg_replace($pattern, $match, $str);