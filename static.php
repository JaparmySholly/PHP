<!DOCTYPE html>
<html lang="en">
<body>
    <?php

//Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.

// To do this, use the static keyword when you first declare the variable:
    function myTest(){
        static $x = 0;
        print $x;
        $x++;
    }

    myTest();
    myTest();
    myTest();
    ?>
</body>
</html>