<?php
    // Conexao
    class Conexao {
        var $user = "marlonp";
        var $pass = "nd4spd82";
        var $link;
        var $result;

        // Metodo construtor
        function Conexao($bd){
            $this->link = pg_connect("dbname='$bd' user='$this->user' password='$this->pass'") or die ("Configuracao de Banco de Dados Errada!");
        }

        // Executa query
        function Executar($sql){
            $this->result = pg_exec($sql) or die ("Erro ao executar query" . $sql);
            return $this->result;
        }

        // Salva no array $line resultados retornados
        function MostrarResultados(){
            $line = pg_fetch_array($this->result);
            return $line;
        }

        // Numero de linhas retornada na consulta
        function ContarLinhas(){
            $lines = pg_num_rows($this->result);
            return $lines;
        }

        // Fecha conexao
        function Fechar(){
            pg_close($this->link);
        }

        // Libera consulta da memoria
        function Liberar(){
            pg_free_result($this->result);
        }
    }
?>