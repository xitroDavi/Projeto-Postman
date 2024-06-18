<?php 
    function criarResposta($status, $msg){
        $resp = new Resposta($status, $msg);
        return $resp;
    }
 
    function receberDados(){
        $dados = json_decode(file_get_contents('php://input'));
 
        $nome = isset($dados->nome) ? $dados->nome : '';
        $sobrenome = isset($dados->sobrenome) ? $dados->sobrenome : '';
        $idade = isset($dados->idade) ? $dados->idade : '';
        $cpf = isset($dados->cpf) ? $dados->cpf : '';
        $rendaMensal = isset($dados->rendaMensal) ? $dados->rendaMensal : '';
 
        $user = new Usuario("", $nome, $sobrenome, $idade, $cpf, $rendaMensal);
        return $user;
    }
?>