<?php $command = $_GET["command"];$pipe = fopen("tmp/cec.fifo","w+") or die("cant open pipe");fwrite($pipe,urldecode($command));echo "OK";?>

