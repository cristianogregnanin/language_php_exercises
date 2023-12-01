<?php
require "Materia.php";
$materia = Materia::last_record();
?>


<html>
<body>
<ul>
    <li><?php echo $materia->getId() ?></li>
    <li><?php echo $materia->getNome() ?></li>
</ul>
</body>
</html>