<?php
$materia = Materia::Find(1);
$params = [];
$params["nome"] = "GOPI";
$materia = $materia->update($params);
