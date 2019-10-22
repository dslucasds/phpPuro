<?php

require 'Conexao.php';

class Cliente {
    
    private $conexao;
    
    public function __construct() {
        $this->conexao = Conexao::getConexao();
    }
    
    public function listar(){
        $sql = 'SELECT * FROM cliente;';
        
        $q = $this->conexao->prepare($sql);
        $q->execute();
        
        return $q;
    }
    
    public function adicionar($nomcli, $endcli, $telcli) {
        $sql = 'INSERT INTO cliente (nomcli, endcli, telcli) VALUES (?, ?, ?);';
        $q = $this->conexao->prepare($sql);
        
        $q->bindParam(1, $nomcli);
        $q->bindParam(2, $endcli);
        $q->bindParam(3, $telcli);
        
        $q->execute();
    }
    
   public function editar($nomcli, $endcli, $telcli) {
        $sql = 'UPDATE cliente SET (nomcli, endcli, telcli) values(?, ?, ?) WHERE (codcli = 1);';
        $q = $this->conexao->prepare($sql);
        
        $q->bindParam(1, $nomcli);
        $q->bindParam(2, $endcli);
        $q->bindParam(3, $telcli);
        
        $q->execute();
    }
}
