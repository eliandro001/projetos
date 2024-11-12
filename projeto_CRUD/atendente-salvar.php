<?php
    switch ($_REQUEST['acao']) {
        case 'cadastrar':
            $nome = $_POST["nome_atendente"];
            $cpf = $_POST["cpf_atendente"];
            $email = $_POST["email_atendente"];
            $telefone = $_POST["fone_atendente"];

            $sql = "INSERT INTO atendente(nome_atendente, cpf_atendente, email_atendente, fone_atendente) VALUES('{$nome}', '{$cpf}', '{$email}', '{$telefone}')";
               
            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Cadastrou com sucesso');</script>";
                print "<script>location.href='?page=atendente-listar';</script>";
            }else{
                print "<script>alert('Não foi possível');</script>";
                print "<script>location.href='?page=atendente-listar';</script>";
            }
            break;
    
       
            case 'editar':
                $nome = $_POST['nome_atendente'];
                $cpf = $_POST['cpf_atendente'];
                $email = $_POST['email_atendente'];
                $telefone = $_POST['fone_atendente'];
    
                $sql = "UPDATE atendente SET
                            nome_atendente = '{$nome}',
                            cpf_atendente = '{$cpf}',
                            email_atendente = '{$email}',
                            fone_atendente = '{$telefone}' 
                        WHERE
                            id_atendente = ".$_REQUEST['id_atendente'];
                $res = $conn->query($sql);
    
                if($res==true)
                {
                    print "<script>alert('Editado com sucesso');</script>";
                    print "<script>location.href='?page=atendente-listar'</script>";
                }
                else
                {
                    print "<script>alert('Falha ao editar')</script>";
                    print "<script>location.href='?page=atendente-listar'</script>";
    
                }
                break;
            case 'excluir':
                    $sql = "DELETE FROM atendente WHERE id_atendente=".$_REQUEST['id_atendente'];
    
                    $res = $conn->query($sql);
    
                if($res==true)
                {
                    print "<script>alert('Excluido com sucesso');</script>";
                    print "<script>location.href='?page=atendente-listar'</script>";
                }
                else
                {
                    print "<script>alert('Falha ao Excluir')</script>";
                    print "<script>location.href='?page=atendente-listar'</script>";
                }
                break;
        }
    
    ?>