<?php include 'header.inc'; ?>
<h2>Login page</h2>

<form method="post" action="process.php">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
    <br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <br>

    <input type="hidden" name="token" value="106729068">
    <input type="submit" value="Login">
    <br>
</form>

<?php include 'footer.inc'; ?>