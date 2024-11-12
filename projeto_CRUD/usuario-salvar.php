<?php
    switch ($_REQUEST['acao']) {
        case 'cadastrar':
           $nome = $_POST['nome_usuario'];
           $cpf = $_POST['cpf_usuario'];
           $email = $_POST['email_usuario'];
           $telefone = $_POST['fone_usuario'];
           $data_nasc = $_POST['dt_nasc_usuario'];
           
           $sql = "INSERT INTO usuario (nome_usuario, cpf_usuario, email_usuario, fone_usuario, dt_nasc_usuario) 
                    VALUES ('{$nome}', '{$cpf}', '{$email}', '{$telefone}', '{$data_nasc}')";
               
            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Cadastrou com sucesso');</script>";
                print "<script>location.href='?page=usuario-listar';</script>";
            }else{
                print "<script>alert('Não foi possível');</script>";
                print "<script>location.href='?page=usuario-listar';</script>";
            }
            break;
    
       
		case 'editar':
            $nome = $_POST['nome_usuario'];
           $cpf = $_POST['cpf_usuario'];
           $email = $_POST['email_usuario'];
           $telefone = $_POST['fone_usuario'];
           $data_nasc = $_POST['dt_nasc_usuario'];

			$sql = "UPDATE usuario SET
                         nome_usuario = '{$nome}',
                        cpf_usuario = '{$cpf}',
                        email_usuario = '{$email}',
                        fone_usuario = '{$telefone}',
                        dt_nasc_usuario = '{$data_nasc}'
                    WHERE
                        id_usuario=".$_REQUEST['id_usuario'];

            $res = $conn->query($sql);

            if($res==true)
            {
                print "<script>alert('Editado com sucesso');</script>";
                print "<script>location.href='?page=usuario-listar';</script>";
            }
            else
            {
                print "<script>alert('Falha ao editar');</script>";
                print "<script>location.href='?page=usuario-listar';</script>";

            }
			break;
            case 'excluir':
                $sql = "DELETE FROM usuario WHERE id_usuario=".$_REQUEST['id_usuario'];
    
                $res = $conn->query($sql);
    
                    if($res==true){
                        print "<script>alert('Excluiu com sucesso');</script>";
                        print "<script>location.href='?page=usuario-listar';</script>";
                    }else{
                        print "<script>alert('Não foi possível');</script>";
                        print "<script>location.href='?page=usuario-listar';</script>";
                    }
                break;
        
        }
    ?>	