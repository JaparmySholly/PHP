<?php
if (isset($_GET['name'])) {
    echo htmlspecialchars($_GET['name']);
} else {
    echo 'Name parameter is missing.';
}
?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Sholly">Click</a>