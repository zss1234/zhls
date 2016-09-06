<?php
$conn = @ mysql_connect("127.0.0.1", "vintriah", "h6ontadYMs6MopJS1kSd") or die("数据库链接错误");
mysql_select_db("vintriah", $conn);
mysql_query("set names 'UTF8'"); //使用GBK中文编码;
?>