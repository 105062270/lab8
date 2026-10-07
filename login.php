<?php 
include("header.inc"); 
?>

<h2>System Login</h2>
<form action="process.php" method="POST">
    <input type="hidden" name="user_token" value="K1234567">

    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username" required><br><br>

    <label for="password">Password (Student ID):</label><br>
    <input type="password" id="password" name="password" required><br><br>

    <button type="submit">Login</button>
</form>

<?php 
include("footer.inc"); 
?>