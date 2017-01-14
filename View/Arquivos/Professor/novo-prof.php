<form method="post" action="" enctype="multipart/form-data">
    <div class="container">
        <div id="select-file" class="row">
            <input type="file" name="arquivo" class="col-xs-12 col-sm-6 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3" required>
        </div>
        <div class="container">
            <div class="row">
                <div id="select-turm" class="col-xs-12 col-sm-6 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3" required>
                    <h4>
                        Selecionar Turma
                    </h4>
                    <h6>
                        Selecione a turma para quem você deseja enviar o arquivo
                    </h6>
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-2">
                                <h6>Primeiro ano</h6>
                                <?php
                                    $test = $user->getId_turma_prof(1);
                                    print_r($test);
                                    if($test != NULL)
                                    {
                                        foreach($test as $ts => $turma):
                                ?>
                                <div class="checkbox">
                                    <label>
                                        <input name="1C" type="checkbox" value="test">1°
                                    </label>
                                </div>
                                <?php
                                        endforeach;
                                    }
                                    else
                                    {
                                        echo "bl";
                                    }

                                ?>
                            </div>
                            <div class="col-xs-2">
                                <h6>Segundo ano</h6>
                                <div class="checkbox">
                                    <label>
                                        <input name="" type="checkbox" value="">2°
                                    </label>
                                </div>
                            </div>
                            <div class="col-xs-2">
                                <h6>Terceiro ano</h6>
                                <div class="checkbox">
                                    <label>
                                        <input name="" type="checkbox" value="">3°
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="input-group col-xs-8" id="input-name">
                      <input id="nome" type="text" class="form-control" placeholder="Nome do Arquivo" aria-describedby="basic-addon2" required>
                      <span class="input-group-addon " id="basic-addon2">
                        <a tabindex="0" class="glyphicon glyphicon-question-sign" role="button" data-placement="left" data-toggle="popover" data-trigger="focus" title="Ajuda" data-content="Este será o nome exibido aos alunos."></a>
                      </span>
                    </div>
                    <textarea id="desc" class="col-xs-11" rows="4" cols="50" placeholder="Descrição"></textarea>
                </div>
                <button type="submit" class="btn-default btn col-xs-6 col-xs-offset-2 col-sm-6 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">Enviar</button> 
            </div>
        </div> 
    </div>
    <div class="hidden-xs hidden-sm hidden-md hidden-lg">
        <input id="op" name="op" value="1">
    </div>
</form>