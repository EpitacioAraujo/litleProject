<div class="container">
    <?php
        $form = '<form method="POST" action="/editar.php?id='.$id.'" enctype="multipart/form-data" accept="image/*">
                    <div class="row">
                        <div class="col-md-10">
                                <div class="mb-3">
                                    <input type="text" value="' . $veiculo['modelo'] . '" name="modelo" class="form-control" placeholder="Modelo">
                                </div>
                                <div class="mb-3">
                                    <input type="text" value="' . $veiculo['ano'] . '" name="ano" class="form-control" placeholder="Ano">
                                </div>
                                <div class="mb-3">
                                    <input type="text" value="' . $veiculo['marca'] . '" name="marca" class="form-control" placeholder="Marca">
                                </div>
                                <div class="mb-3">
                                    <input type="text" value="' . $veiculo['valor'] . '" name="valor" class="form-control" placeholder="Valor">
                                </div>
                                <div class="mb-3">
                                    <textarea name="observacao" class="form-control" placeholder="Observação">' . $veiculo['observacao'] . '</textarea>
                                </div>
                                <a href="/" class="btn btn-primary">Cancelar</a>
                                <button name="btnEditar" type="submit" class="btn btn-success">Enviar</button>
                        </div>
                        <div class="col-md-2">
                            <div class="upload-image">
                                <figure class="figure">
                                <img id="preview" class="figure-img img-fluid rounded" src="' . $veiculo['imagem'] . '">
                                </figure>
                                <input name="imagem" type="file" id="imagem-upload">
                            </div>
                        </div>
                    </div>
                </form>';
        echo $form;
    ?>
</div>

<script src="../scripts/editar.js"></script>