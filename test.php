<?php

echo $_GET["name"];
echo $_GET["age"];

?>

<a href="<?php echo $_SERVER["PHP_SELF"]; ?>?
name=Sholly&age=30">Click</a>

<form action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <div>
        <label for="">Name:</label>
        <input type="text" name='name'>
    </div>
    <div>
        <label for="">Age:</label>
        <input type="text" name='age'>
    </div>
    <input type="submit" value="Submit" name="Submit">
</form>