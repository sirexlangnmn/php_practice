<?php
$string = "Federex Pogi";
$compressed = gzcompress($string);
echo $compressed;

echo '<br />';
$uncompressed = gzuncompress($compressed);
echo $uncompressed;

?>