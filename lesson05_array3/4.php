<?php
/**
    大小写转换
    strtoupper	全部大写
    strtolower	全部小写
    ucfirst		首字母大写
    ucwords		字符首字母大写
    htmlspecialchars
    htmlentities
    strip-tags
    stripslashes
 */

$trr = ' i love you';
$new = strtoupper( $trr );
echo $new;
$new = strtolower( $trr );
echo $new;
$new = ucfirst( $trr );		//如果有空格，不起作为
echo $new;
$new = ucwords( $trr );
echo $new;
echo '<hr>';

/**
    nl2br
    htmlspecialchars
    htmlentities
    strip_tags()
 */

$arr = "后来\n '我总算学会了'\n如何去爱\n可是\你早已远去";
echo nl2br($arr);
$arr = "<p>" . $arr . "</p>";
echo $arr;
echo htmlspecialchars($arr, ENT_QUOTES);	//对引号也进行转换
echo htmlspecialchars($arr, ENT_COMPAT);	//默认值，只转换双引号，保留单引号
echo '<hr>';
echo htmlentities($arr);
echo strip_tags($arr);
echo addslashes($arr);						//' '' \ 等前加 \
echo stripslashes($arr);