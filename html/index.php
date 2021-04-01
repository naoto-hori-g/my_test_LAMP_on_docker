<?php
date_default_timezone_set('Asia/Tokyo');

$openTime = new DateTime('2021-02-22 10:00');

//「testsite」
if (strpos(__DIR__, 'testsite') !== false) {
    $openTime = $openTime->modify('-1 year');
}

if (new DateTime < $openTime) : ?>
    変更前のコード123
<?php else : ?>
    変更後のコード321
<?php endif; ?>