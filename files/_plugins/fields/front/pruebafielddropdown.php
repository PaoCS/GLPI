<?php

Plugin::load('fields', true);

$dropdown = new PluginFieldsPruebafieldDropdown();
include GLPI_ROOT . "/front/dropdown.common.php";
