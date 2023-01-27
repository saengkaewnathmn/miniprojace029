<?php
session_start();
session_destroy();
echo "<script>window.location.href='form_login.php'</script>";
?>