<?php include_once 'config.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<title>Minha Conta</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<link rel='stylesheet' type='text/css' href='<?php echo CSS ?>/jquery.treeview.css' />
	<link rel='stylesheet' type='text/css' href='<?php echo CSS ?>/smoothness/jquery-ui-1.8.5.custom.css' />
	<link rel='stylesheet' type='text/css' href='<?php echo CSS ?>/index.css' />	
	
	<!-- Chamadas do framework jQuery -->
	<script type="text/javascript" src="<?php echo JS ?>/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="<?php echo JS ?>/jquery-ui-1.8.5.custom.min.js"></script>	
	<script type="text/javascript" src="<?php echo JS ?>/jquery-treeview/lib/jquery.cookie.js"></script>
	<script type="text/javascript" src="<?php echo JS ?>/jquery-treeview/jquery.treeview.min.js"></script>
	<script type="text/javascript" src="<?php echo JS ?>/jquery.ui.core.min.js"></script>	
	<script type="text/javascript" src="<?php echo JS ?>/jquery.ui.datepicker-pt-BR.js"></script>
	<script type="text/javascript" src="<?php echo JS ?>/index.js"></script>
</head>
<body>
<div id="geral">
	<div id="topo"><?php include 'topo.php';?></div>
	<div id="lateral"><?php include 'lateral.php';?></div>
	<div id="conteudo"><?php include 'conteudo.php';?></div>
	<div class="clear">&nbsp;</div>
	<div id="rodape"><?php include 'rodape.php';?></div>
</div>
</body>
</html>