<?php
if(!$_GET["app"]){
?>
<div id="frm_nova_conta" title="Conta | Novo">
<form>
	<span class="form_field"><label for="txt_name">Nome</label>
	<input type="text" name="txt_name" id="txt_name" class="text ui-widget-content" /></span>
	<span class="form_field"><label for="cbo_tipo">Tipo de Conta</label>
	<select id="cbo_tipo" name="cbo_tipo" class="select ui-widget-content">
		<option>Cartão de Crédito</option>
		<option>Dinheiro</option>
		<option>Conta-Corrente</option>
		<option>Poupança</option>
	</select></span>
	<span class="form_field"><label for="cbo_banco">Banco</label>
	<select id="cbo_banco" name="cbo_banco" class="select ui-widget-content">
		<option>:: Carteira ::</option>
		<option>Itaú</option>
		<option>Caixa Econômica Federal</option>
		<option>Banco do Brasil</option>
	</select></span>	
	<span class="form_field"><label for="txt_agencia">Agência</label>
	<input type="text" name="txt_agencia" id="txt_agencia" class="text ui-widget-content" /></span>
	<span class="form_field"><label for="txt_numero">Número</label>
	<input type="text" name="txt_numero" id="txt_numero" class="text ui-widget-content" /></span>		
	<hr />
	<span class="form_field"><label for="txt_limite">Limite de Crédito</label>
	<input type="text" name="txt_limite" id="txt_limite" class="text ui-widget-content" /></span>
	<span class="form_field"><label for="txt_vencimento">Vencimento do Limite</label>
	<input type="text" name="txt_vencimento" id="txt_vencimento" class="text ui-widget-content" /></span>					
</form>
	
</div>
<div class="conteudo">
<div id="column-left">
	<div class="portlet bloqueado">
		<div class="portlet-header">Contas</div>
		<div class="portlet-content">
			<table style='width:100%;'>
				<thead>
					<tr>
						<th>Conta</th>
						<th>Saldo Atual</th>
					</tr>
				</thead>
				<tbody>
					<tr style='background:#dddddd;'><td>&nbsp;</td><td>&nbsp;</td></tr>
					<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
					<tr style='background:#dddddd;'><td>&nbsp;</td><td>&nbsp;</td></tr>
					<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
					<tr style='background:#dddddd;'><td>&nbsp;</td><td>&nbsp;</td></tr>
					<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
					<tr style='background:#dddddd;'><td>&nbsp;</td><td>&nbsp;</td></tr>
					<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
					<tr style='background:#dddddd;'><td>&nbsp;</td><td>&nbsp;</td></tr>
					<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
					<tr style='background:#dddddd;'><td>&nbsp;</td><td>&nbsp;</td></tr>
					<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
					<tr style='background:#dddddd;'><td>&nbsp;</td><td>&nbsp;</td></tr>
					<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
					<tr style='background:#dddddd;'><td>&nbsp;</td><td>&nbsp;</td></tr>
					<tr><td>&nbsp;</td></tr>
				</tbody>
				<tfoot>
					<tr style='background:#dddddd;'><td colspan='2'>Saldo Final</td></tr>
					<tr><td><a href="#" class="button" id="btn_nova_conta">Nova Conta</a></td><td><a href="#" class="button">Lista</a></td></tr>
				</tfoot>
			</table>
		</div>
	</div>
</div>
<div id="column-right">
	<div id="row-top">
		<div class="portlet bloqueado">
			<div class="portlet-header">Previsão para os próximos 90 dias</div>
			<div class="portlet-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</div>
		</div>		
	</div>
	<div id="row-middle">
		<div class="portlet">
			<div class="portlet-header">Orçado x Realizado do Mês</div>
			<div class="portlet-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</div>
		</div>
		<div class="portlet">
			<div class="portlet-header">Despesas do mês atual</div>
			<div class="portlet-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</div>
		</div>
	
		<div id="datepicker" class="portlet"></div>
	
	</div>
	<div id="row-bottom">
		<div class="portlet">
			<div class="portlet-header">Previsão para os próximos 90 dias</div>
			<div class="portlet-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</div>
		</div>		
	</div>
</div>
</div>
<?php 
} else {
	if($_GET["subapp"] == '/'){
		include './apps/' . $_GET["app"] . '.php';
	} else {
		$subapp = substr($_GET["subapp"], 0, -1);
		include './apps' . $subapp. '.php';
	}
}
?>