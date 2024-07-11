<?php
session_start();

if (isset($_POST['submit'])) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

    if ($username === 'john' && $password === 'password') {
        $_SESSION['username'] = $username;
        header('Location: /dashboard.php');
        exit(); // Make sure to exit after a redirect to stop further execution
    } else {
        echo 'Incorrect Login';
    }
}
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <div>
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
    </div>
    <div>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
    </div>
    <input type="submit" value="Submit" name="submit">
</form>
