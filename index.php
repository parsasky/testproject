<?php

include('qr/qrlib.php'); 

QRcode::png('457584842','1.png', QR_ECLEVEL_H, 60, 1);
QRcode::png('45758484','o.png');
echo '<img src="'.QRcode::png('45758484').'" />';
?>
