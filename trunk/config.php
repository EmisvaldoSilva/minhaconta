<?php
/*
 * Definição de data/hora do sistema.
 */
date_default_timezone_set('America/Sao_Paulo');
   
/*
 * Definiçao das constantes com os diretórios padrão.
 */

define('IMAGENS','http://' . $_SERVER['HTTP_HOST'] . '/minhaconta/includes/images');
define('JS','http://' .  $_SERVER['HTTP_HOST'] . '/minhaconta/includes/js');
define('CLASSES','http://' .  $_SERVER['HTTP_HOST'] . '/minhaconta/includes/classes');
define('CSS','http://' .  $_SERVER['HTTP_HOST'] . '/minhaconta/includes/css');

?>
