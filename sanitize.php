<?php

if(isset($_POST["submit"])) {
    $name =  htmlspecialchars($_POST["name"]);
    $age =  htmlspecialchars($_POST["age"]);
    echo $name;
}

?>

<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
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