<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

include("header.inc");
?>

<h2>Welcome Page</h2>
<p>Hello, <strong><?php echo htmlspecialchars($_SESSION['user']); ?></strong>! You have successfully logged in.</p>

<p><a href="logout.php">Logout</a></p>

<?php
// Include footer file
include("footer.inc");
?>