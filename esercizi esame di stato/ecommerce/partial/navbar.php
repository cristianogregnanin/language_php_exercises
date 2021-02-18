<?php if ($current_user) { ?>
    <a href="/actions/logout.php" >logout</a>
<?php } else { ?>
    <a href="/views/login.php" >login</a>
<?php } ?>
