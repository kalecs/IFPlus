<?php

require_once '../../config.php';
require_once("../../Classes/Aula.php");
require_once '../../Funcoes/Caderno/banco-aula.php';


$titulo = $_POST['titulo'];
$numero = $_POST['numero'];
$conteudo = $_POST['conteudo'];
$Disciplina = $_POST['id_disciplina'];



if (insereAula($conexao, $titulo, $numero, $conteudo, $Disciplina)) {

    $_SESSION['success'] = 'A aula ' . $titulo . ' foi adicionada.';
} else {
    $msg = mysqli_error($conexao);

    $_SESSION['danger'] = 'A aula ' . $titulo . ' não foi adicionada:' . $msg;
} header('Location:' . BASEURL . 'View/Caderno/index.php');
?>

