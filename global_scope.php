<!DOCTYPE html>
<html lang="en">
<body>

  <!-- A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function: -->


    <?php
        $x = 5; // global scope

        function myTest() {
          // using x inside this function will generate an error
          echo "<p>Variable x inside function is: $x</p>";
        }
        myTest();
        
        echo "<p>Variable x outside function is: $x</p>";
    ?>
</body>
</html>