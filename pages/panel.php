<?php 
require_once(__DIR__ . "/../config/app.php");
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: ./index.php");
  exit;
}
?>
<?php
  $title = "Panel Page";
  include(__DIR__ . "/../inc/_header.php");
?>
    <h1>Hello world</h1>
    <p><a href="<?php echo BASE_URL ?>modules/close_sessions.php">Log out</a></p>
<?php
  include(__DIR__ . "/../inc/_footer.php");
?>