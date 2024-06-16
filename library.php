<?php
/* htmlspecialcharsを短くする */
function h($value) {
	return htmlspecialchars($value, ENT_QUOTES);
}

/* DBへの接続 */
function dbconnect() {
    $db = new mysqli('localhost', 'root', 'root', 'min_bbs', 8889);
    // 出现数据库连接不上的问题-->解决：加上端口信息；默认情况下MySQL使用端口3306
    if (!$db) {
		die($db->error);
	}

    return $db;
}
?>