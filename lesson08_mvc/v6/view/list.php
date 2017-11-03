<div style='color:orange'><?php echo $name;?></div>

<table width="600" center="align" border=1 cellspadding="0" align="center">
    <tr>
        <td>用户名</td>
        <td>年龄</td>
    </tr>
    <?php foreach($userList as $val){
        echo '<tr>';
        echo "<td style='color:orange'>$val[username]</td>";
        echo "<td style='color:orange'>$val[sex]</td>";
        echo '</tr>';
    }
    ?>
</table>


<a href="./index.php?page=index">返回首页</a>