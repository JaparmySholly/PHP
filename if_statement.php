<!DOCTYPE html>
<html lang="en">
<body>
    <?php

    $t = date("H");
    if ($t < "20") {
        echo "Have a good day!";
    } else {
        echo "Have a good night!";
    }

    ?>
</body>
</html>