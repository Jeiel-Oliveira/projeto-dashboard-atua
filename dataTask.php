<?php

/* classes para conectar no banco de dados */

require_once 'class/class.conexao.php';
require_once 'class/Class.crud.php';

date_default_timezone_set('America/Sao_Paulo');

/* informações de como usar a classe Crud estao no final do aruivo class.crud.php */

$conexao = Conexao::getConexao();
Crud::setTabela('tb_task');
Crud::setConexao($conexao);

$tasks = Crud::Select('SELECT * FROM tb_task ORDER BY id DESC', [], TRUE);

$name = (isset($_POST['name'])) ? $_POST['name'] : '';
$date = (isset($_POST['date'])) ? $_POST['date'] : '';
$responsible = (isset($_POST['responsible'])) ? $_POST['responsible'] : '';

$action = (isset($_REQUEST['action'])) ? $_REQUEST['action'] : '';
$id = (isset($_REQUEST['id'])) ? $_REQUEST['id'] : '';

$data = '';
$msgErr = '';
$msgUsuario = '';
$contErro = 0;

/* fazendo o select no banco de dados para exibir as tarefas criadas */

foreach ($tasks as $task) {    

    $data .= '
        <tr>
            <td class="font-weight-bold"># ' . $task->id . '</td>                                                   
            <td class="font-weight-bold">' . $task->nome_tarefa . '</td>
            <td>
                <div class="task-status">' .
                    date('d/m/Y', strtotime($task->data))
            . '</div>
            </td>
            <td>' . $task->responsavel . '</td>
            <td class="edit-dashboard">                                            
                <a href="newTask.php?action=editar&id=' . $task->id . '"><i class="far fa-edit edit-button"></i></a>                                                                                            
                <a href=""><i class="far fa-eye see-button px-2"></i></a>                                                                                             
                <a href="return.php?action=excluir&id=' . $task->id . '"><i class="fas fa-ban edit-delete"></i></a>                                                                                            
            </td>
        </tr>
    ';
}

/* fazendo o insert no banco de dados */

if ($action == 'inserir') {

    if (empty($name)) {
        $msgErr = "Informe o nome da tarefa";
        $contErro++;
    }

    if (empty($date)) {
        $msgErr = "Informe uma data";
        $contErro++;
    }

    if (empty($responsible)) {
        $msgErr = "Informe um responsável";
        $contErro++;
    }

    if ($contErro > 0) {
        $msgErr;   
        $retorno = false;     
    } else {
        $insertData = ['nome_tarefa' => $name, 'data' => $date, 'responsavel' => $responsible];
        $retorno = Crud::Insert($insertData);
    }

    if ($retorno) {                
        $msgUsuario =  "INSERIDO COM SUCESSO";                                
    } else {
        $msgUsuario =  "ERRO AO INSERIR CLIENTE";
    }

}

/* fazendo o delete no banco de dados */

if ($action == 'excluir') {

    if (empty($id)) :
        $msgUsuario = "- Informe o ID do cliente <br>";
    endif;

    $return = Crud::Delete(['id' => $id]);

    if ($return) {                
        $msgUsuario =  "EXCLUIDO COM SUCESSO <br>";        
    } else {
        $msgUsuario = 'ERRO AO EXCLUIR CLIENTE';
    }
}

/* fazendo o update no banco de dados */

if($action == 'editar') {
    $return = Crud::Update(['nome_tarefa' => $name, 'data' => $date, 'responsavel' => $responsible], ['id' => $id]);

    if($return){
        $msgUsuario = "EDITADO COM SUCESSO <br>";        
    } else {
        $msgUsuario=  'ERRO AO EDITAR CLIENTE';
    };
};
