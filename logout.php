<?php
session_start();
session_unset();
session_destroy();
echo "<script>
    alert('Você saiu do sistema!');
    window.location.href='index.php';
</script>";