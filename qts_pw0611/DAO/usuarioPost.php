<?php 
   
   function incluir_usuario($conexao, $u){
 
        $sql = "INSERT INTO tbl_usuarios (nome, sobrenome, idade, cpf, rendaMensal) VALUES ('$u->nome', '$u->sobrenome', '$u->idade', '$u->cpf', '$u->rendaMensal');";
        $res = mysqli_query($conexao, $sql) or die("Erro ao tentar incluir");
        fecharConexao($conexao);
        return $res;
   };
?>