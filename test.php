<?php $details = json_decode(file_get_contents("http://ipinfo.io/"));
echo $details->loc; ?>
