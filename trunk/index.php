<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<title>Minha Conta</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel='stylesheet' type='text/css' href='./includes/css/index.css' />
	<link rel='stylesheet' type='text/css' href='./includes/css/jquery.treeview.css' />
	<link rel='stylesheet' type='text/css' href='./includes/css/smoothness/jquery-ui-1.8.5.custom.css' />
	<style type="text/css">
		#column-left { width: 30%; float: left; padding-bottom: 100px; }
		#column-right { width: 70%; float: left; padding-bottom: 100px; }
		.portlet { margin: 0 1em 1em 0;}
		.portlet-header { margin: 0.3em; padding: 4px;}
		.portlet-content { padding: 0.4em; }
		#row-top { width: 100% }
		#row-top .portlet {float: left; width: 31%;}
		#row-bottom { width: 100%; clear:both; }
	</style>	
	<!-- Chamadas do framework jQuery -->
	<script type="text/javascript" src="./includes/js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="./includes/js/jquery-ui-1.8.5.custom.min.js"></script>	
	<script type="text/javascript" src="./includes/js/jquery-treeview/lib/jquery.cookie.js"></script>
	<script type="text/javascript" src="./includes/js/jquery-treeview/jquery.treeview.min.js"></script>
	<script type="text/javascript" src="./includes/js/jquery-ui-1.8.5.custom.min.js"></script>
	<script type="text/javascript" src="./includes/js/jquery.ui.core.min.js"></script>		
	<script type="text/javascript">
	$(document).ready(function(){
		$("#navigation").treeview({
			persist: "cookie",
			cookieId: "treeview-black"
		});
		$(".portlet").addClass("ui-widget ui-widget-content ui-helper-clearfix")
			.find(".portlet-header")
				.addClass("ui-widget-header")
				.end()
			.find(".portlet-content");
		$( "#datepicker" ).datepicker();
	});		  
	</script>	
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