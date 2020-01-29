<?php 
    include 'header.php'; 
    include 'dataTask.php';
?>

    <article class="padding-content-nav">

        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="table-background p-4 h-100">
                        <h1 class="title-dashboard">TRABALHOS EM PROGRESSO</h1>                        
                        <div class="table-responsive">    

                            <!-- tabela de tarefas -->

                            <table class="table table-content table-hover">                                   
                                <tbody id="data-table">    

                                    <?= $data ?>                                    

                                </tbody>
                            </table>   

                        </div>    
                    </div>
                </div>

                <div class="col-lg-4 col-12 second-table">
                    
                    <div class="table-background p-4 h-100">
                        <h1 class="title-dashboard">USUÁRIOS</h1>

                        <!-- lista de usuários -->

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-6 font-weight-bold">
                                        Tony Stark
                                    </div>
    
                                    <div class="col-6">
                                        <div class="identifier">
                                            Você
                                        </div>  
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item font-weight-bold">Steve Rogers</li>
                            <li class="list-group-item font-weight-bold">Natasha Romanoff</li>
                            <li class="list-group-item font-weight-bold">peter Parker</li>
                            <li class="list-group-item font-weight-bold">Thor Odinson</li>
                            <li class="list-group-item font-weight-bold">Bruce Banner</li>
                            <li class="list-group-item font-weight-bold">Scott Lang</li>
                        </ul>

                    </div>                    
                </div>
            </div>
        </div>

    </article>

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
</body>

</html>