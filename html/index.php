<?php
$ip = file_get_contents('https://ifconfig.me/ip');
echo "Your public IP address is: " . $ip;
?>
