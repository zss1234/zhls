<?php
$conn = @ mysql_connect("127.0.0.1", "zhls", "mtvEbKp8PY62KXZAOua2") or die("数据库链接错误");
mysql_select_db("zhls", $conn);
mysql_query("set names 'UTF8'"); //使用GBK中文编码;
?>