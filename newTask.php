<?php         
    require_once 'class/class.conexao.php';
    require_once 'class/Class.crud.php';

    include 'header.php';
        
    $conexao = Conexao::getConexao();
    Crud::setConexao($conexao);

    $id = (isset($_GET['id'])) ? $_GET['id'] : '';
    $action = (isset($_GET['action'])) ? $_GET['action'] : 'inserir';

    $name = '';
    $date = '';
    $responsible = '';

    /* fazendo um select para realizar o update do editar */

    if(!empty($id)){
        $register = Crud::Select('SELECT * FROM tb_task WHERE id = :id', ['id' => $id], FALSE);

        $name = (!empty($register)) ? $register->nome_tarefa : '';
        $date = (!empty($register)) ? $register->data : '';
        $responsible = (!empty($register)) ? $register->responsavel : '';        
    }
?>
        
    <div class="container">
        
            <article class="padding-content-nav">

                <!-- fomrulario de nova tarefa -->

                <form action="return.php" method="POST" class="card-form-task mx-auto" id="newForm">

                    <div class="form-group">
                      <label for="name-task">Tarefa</label>
                      <input type="text" class="form-control input-form-login" id="name-task" name="name" value="<?= $name ?>" placeholder="Digite sua tarefa: ">                      
                      <p id="feedbackUserName" class="feedback-response"></p>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="date-task" class="">Data</label>
                          <input type="date" class="form-control input-form-login" value="<?= $date ?>" id="date-task" name="date">                                                    
                          <p id="feedbackUserDate" class="feedback-response"></p>
                        </div>                  
    
                        <div class="form-group col-md-6">
                            <label for="responsible-task">Responsável: </label>
                            <input type="text" class="form-control input-form-login" value="<?= $responsible ?>" id="responsible-task" name="responsible" placeholder="responsável">                            
                            <p id="feedbackUserRespons" class="feedback-response"></p>
                        </div>
                    </div>

                                    
                    <div class="text-right">
                        <button type="submit" class="btn-save">SALVAR</button>
                    </div>

                    <input type="hidden" value="<?=$action?>" name="action">
                    <input type="hidden" value="<?=$id?>" name="id">
                                          
                </form>                

            </article>                    
            
        </div>
            
        
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"    
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <script src="js/main.js"></script>
    <script src="js/taskValidation.js"></script>
</body>

</html>