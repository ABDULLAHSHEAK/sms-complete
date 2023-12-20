<?php
if (!isset($_SESSION["index_number"])) {
 echo "<script>window.location.href='../view/login.php'</script>";
}