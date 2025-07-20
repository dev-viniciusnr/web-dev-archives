<?php
// Conexão com o banco de dados
   require_once('db.class.php');
// Se o usuário clicou no botão cadastrar efetua as ações
    
    // Recupera os dados dos campos
    $tipoarte = $_POST['tipoarte'];
    $tamanho = $_POST['tamanho'];
    $cate = $_POST['produto'];
    $foto = $_FILES["foto"];
    $fotonum = 1;

    $objDb = new db();
    $link = $objDb->conecta_mysql();

        $sql = "INSERT INTO montados (tamanho, tipoarte, idcategoria) VALUES ('$tamanho','$tipoarte','$cate');";
        
             if ($link->query($sql) === TRUE) {
                include("montado.php");
                } else {
                    echo "Putz1";
                }

    function addFoto1($foto, $coluna, $nome){
    $objDb2 = new db();
    $link2 = $objDb2->conecta_mysql();
    // Se a foto estiver sido selecionada
    if (!empty($foto["name"])) {
        
        // Largura máxima em pixels
        $largura = 500;
        // Altura máxima em pixels
        $altura = 500;
        // Tamanho máximo do arquivo em bytes
        $tamanho = 100000;
 
        $error = array();
 
        // Verifica se o arquivo é uma imagem
        if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $foto["type"])){
           $error[1] = "Isso não é uma imagem.";
        } 
    
        // Pega as dimensões da imagem
        $dimensoes = getimagesize($foto["tmp_name"]);
    
        // Verifica se a largura da imagem é maior que a largura permitida
        if($dimensoes[0] > $largura) {
            $error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
        }
 
        // Verifica se a altura da imagem é maior que a altura permitida
        if($dimensoes[1] > $altura) {
            $error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
        }
        
        // Verifica se o tamanho da imagem é maior que o tamanho permitido
        if($foto["size"] > $tamanho) {
            $error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
        }
 
        // Se não houver nenhum erro
        if (count($error) == 0) {
        
            // Pega extensão da imagem
            preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);
 
            // Gera um nome único para a imagem
            $nome_imagem = md5(uniqid(time())) . "." . $ext[1];
 
            // Caminho de onde ficará a imagem
            $caminho_imagem = "img/msa/" . $nome_imagem;
 
            // Faz o upload da imagem para seu respectivo caminho
            move_uploaded_file($foto["tmp_name"], $caminho_imagem);
        
            // Insere os dados no banco
            $sql2 = "UPDATE montados SET $coluna = '$nome_imagem' WHERE idmont ='$nome';";
        
             if ($link2->query($sql2) === TRUE) {
                echo "$nome_imagem , $coluna";
                } else {
                    echo "Putz";
                }
        }
    }
}




?>