<?php

$file = 'user.txt';

if (file_exists($file)) {
    $handle = fopen($file, 'r');
    $contents = fread($handle, filesize($file));
    fclose($handle);
    echo $contents;
} else {
    $handle = fopen($file, 'w');
    $contents = 'Fawaz' . PHP_EOL . 'Joy' . PHP_EOL . 'Mike';
    fwrite($handle, $contents);
    fclose($handle);
}
