$(document).ready(function(){
	$("#navigation").treeview({
		persist: "cookie",
		cookieId: "treeview-black"
	});
	$("#column-left, #column-right, #row-top, #row-middle, #row-bottom").sortable({
		connectWith: '.conteudo, #column-left, #column-right, #row-top, #row-middle, #row-bottom',
		items: '.portlet:not(.bloqueado)'
	});	
	$(".portlet").addClass("ui-widget ui-widget-content ui-helper-clearfix")
		.find(".portlet-header")
			.addClass("ui-widget-header")
			.end()
		.find(".portlet-content");
	$('.portlet-header').hover(
			function() { $(this).css('cursor', 'move'); } 
	);
	$('.portlet-header .ui-icon').hover(
			function() { $(this).css('cursor', 'pointer'); } 
	);		
	$.datepicker.setDefaults( $.datepicker.regional[ "pt-BR" ] );
	$( "#datepicker").datepicker({autoSize: true});
	$( ".button" ).button();
	$( "#frm_nova_conta" ).dialog({
		autoOpen: false,
		show: "blind",
		hide: "blind",
		resizable: false,
		height:300,
		width:500,
		modal: true,
		closeOnEscape: true,
		buttons: {
			"OK": function() {
				$( this ).dialog( "close" );
			},
			"Cancelar": function() {
				$( this ).dialog( "close" );
			}
		}
	});
	$( "#btn_nova_conta" )
	.button()
	.click(function() {
		$( "#frm_nova_conta" ).dialog( "open" );
	});
	$( "#txt_vencimento" ).datepicker({
		showOn: "button",
		buttonImage: "./includes/images/icons/calendar.png",
		buttonImageOnly: true,
		dateFormat: 'dd/mm/yy'
		
	});
	
});		  