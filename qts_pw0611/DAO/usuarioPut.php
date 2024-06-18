<?php 
   
   function editar_usuario($conexao, $u, $id){

        $sql = "UPDATE tbl_usuarios SET nome = '$u->nome', sobrenome = '$u->sobrenome', idade = '$u->idade', cpf = '$u->cpf', rendaMensal='$u->rendaMensal' WHERE id = $id;";
        $res = mysqli_query($conexao, $sql) or die("Erro ao tentar incluir");
        fecharConexao($conexao);
        return $res;
   };

?>