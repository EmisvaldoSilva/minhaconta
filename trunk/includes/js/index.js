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
	$( "#datepicker").datepicker();
	$( ".button" ).button();
	$( "#frm_nova_conta" ).dialog({
		autoOpen: false,
		resizable: false,
		height:140,
		modal: true,
		buttons: {
			"Delete all items": function() {
				$( this ).dialog( "close" );
			},
			Cancel: function() {
				$( this ).dialog( "close" );
			}
		}
	});
	$( "#btn_nova_conta" )
	.button()
	.click(function() {
		$( "#frm_nova_conta" ).dialog( "open" );
	});
});		  