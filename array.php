<?php

$data = [1, 2, 3];

foreach ($data as &$d) {
    print($d + 1);
}
# => "A" + i のときに警告が出る

?>