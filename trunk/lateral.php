<br />
<div class="menus">
	<ul id="navigation" class="filetree treeview">
		<?php 
			$principal = "<li class='closed'><span class='principal'><a href='#' title=''>Página Principal</a></span>\n";
			$principal .= "<ul>\n";
			$principal .= "<li><span class='file'><a href='#'>Contas</a></span></li>\n";
			$principal .= "<li><span class='file'><a href='#'>Nova Conta a Receber</a></span></li>\n";
			$principal .= "<li><span class='file'><a href='#'>Nova Conta a Pagar</a></span></li>\n";
			$principal .= "<li><span class='file'><a href='#'>Programar Transferência</a></span></li>\n";
			$principal .= "<li><span class='file'><a href='#'>Novo Item</a></span></li>\n";
			$principal .= "<li><span class='file'><a href='#'>Recibos</a></span></li>\n";
			$principal .= "<li><span class='file'><a href='#'>Backup</a></span></li>\n";							
			$principal .= "<li><span class='file'><a href='#'>Restaurar Backup</a></span></li>\n";
			$principal .= "<li><span class='file'><a href='#'>Tema</a></span></li>\n";
			$principal .= "<li><span class='file'><a href='#'>Opções</a></span></li>\n";
			$principal .= "<li><span class='file'><a href='#'>Email para o Suporte</a></span></li>\n";
			$principal .= "<li><span class='file'><a href='#'>Ajuda</a></span></li>\n";
			$principal .= "</ul>\n";
			$principal .= "</li>\n";
			echo $principal;
			$lancamentos = "<li class='closed'><span class='lancamentos'><a href='#' title=''>Lançamentos</a></span>\n";
			$lancamentos .= "<ul>\n";
			$lancamentos .= "<li><span class='file'><a href='#'>Depositar</a></span></li>\n";
			$lancamentos .= "<li><span class='file'><a href='#'>Pagar</a></span></li>\n";
			$lancamentos .= "<li><span class='file'><a href='#'>Transferir</a></span></li>\n";
			$lancamentos .= "<li><span class='file'><a href='#'>Importar Extrato</a></span></li>\n";
			$lancamentos .= "<li><span class='file'><a href='#'>Importar Arquivo CSV</a></span></li>\n";
			$lancamentos .= "<li><span class='file'><a href='#'>Exportar CSV</a></span></li>\n";							
			$lancamentos .= "</ul>\n";
			$lancamentos .= "</li>\n";
			echo $lancamentos;
			$programacao = "<li class='closed'><span class='programacao'><a href='#' title=''>Programação</a></span>\n";
			$programacao .= "<ul>\n";
			$programacao .= "<li><span class='file'><a href='#'>Contas a Receber</a></span></li>\n";
			$programacao .= "<li><span class='file'><a href='#'>Contas a Pagar</a></span></li>\n";
			$programacao .= "<li><span class='file'><a href='#'>Transferências Programadas</a></span></li>\n";
			$programacao .= "<li><span class='file'><a href='#'>Contas Pagas e Recebidas</a></span></li>\n";
			$programacao .= "<li><span class='file'><a href='#'>Orçamento</a></span></li>\n";
			$programacao .= "</ul>\n";
			$programacao .= "</li>\n";
			echo $programacao;
			$clientesfornecedores = "<li class='closed'><span class='cef'><a href='#' title=''>Clientes e Fornecedores</a></span>\n";
			$clientesfornecedores .= "<ul>\n";
			$clientesfornecedores .= "<li><span class='file'><a href='#'>Clientes</a></span></li>\n";
			$clientesfornecedores .= "<li><span class='file'><a href='#'>Fornecedores</a></span></li>\n";
			$clientesfornecedores .= "<li><span class='file'><a href='#'>Colaboradores</a></span></li>\n";
			$clientesfornecedores .= "</ul>\n";
			$clientesfornecedores .= "</li>\n";
			echo $clientesfornecedores;		
			$categorias = "<li class='closed'><span class='categorias'><a href='#' title=''>Categorias</a></span>\n";
			$categorias .= "<ul>\n";
			$categorias .= "<li><span class='file'><a href='#'>Geral</a></span></li>\n";
			$categorias .= "<li><span class='file'><a href='#'>Financeiro</a></span></li>\n";
			$categorias .= "</ul>\n";
			$categorias .= "</li>\n";
			echo $categorias;	
			$relatorios = "<li class='closed'><span class='ger'><a href='#' title=''>Gráficos e Relatórios</a></span>\n";
			$relatorios .= "<ul>\n";
			$relatorios .= "<li class='closed'><span class='folder'><a href='#'>Gráficos e Relatórios</a></span>\n";
			$relatorios .= "<ul>\n";
			$relatorios .= "<li><span class='file'><a href='#'>Favoritos</a></span></li>\n";
			$relatorios .= "<li><span class='file'><a href='#'>Contas</a></span></li>\n";
			$relatorios .= "<li><span class='file'><a href='#'>Receitas e Despesas</a></span></li>\n";
			$relatorios .= "<li><span class='file'><a href='#'>Contas a Pagar e Receber</a></span></li>\n";
			$relatorios .= "<li><span class='file'><a href='#'>Listas</a></span></li>\n";
			$relatorios .= "<li><span class='file'><a href='#'>Resumo Mensal</a></span></li>\n";
			$relatorios .= "</ul>\n";
			$relatorios .= "</li>\n";
			$relatorios .= "<li><span class='file'><a href='#'>Previsão de Fluxo de Caixa</a></span></li>\n";
			$relatorios .= "<li><span class='file'><a href='#'>Demonstrativo Financeiro</a></span></li>\n";
			$relatorios .= "</ul>\n";
			$relatorios .= "</li>\n";
			echo $relatorios;				
		?>
	</ul>
</div>