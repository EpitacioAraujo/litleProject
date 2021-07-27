    <main>
        <div class="row"> 
            <?php echo $conteudo; ?>
        </div>
    </main>

    <div class="description">
            <div class="description-header">
                <button class="btn btn-default" id="close-description">X</button>
            </div>

            <img src="../images/car.png" class="description-img-top" alt="...">
                
            <div class="description-body">
                <div class="description-header">
                    <h5 class="description-title">Car title</h5>
                    <h5 class="description-price">R$ 500,00 / mês</h5>
                </div>
                <p class="description-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>

            <!-- Usuário não logado -->
            <!-- <a href="../login.html" class="btn btn-danger form-control">Faça login para poder comprar</a> -->

            <!-- Usuário lgoado -->
            <button class="btn btn-danger form-control">Comprar!</button>
    </div>

    <div id="register-car-modal" class="register-car">
            <header id="close-register-car">
                x
            </header>
            <form method="POST" action="cadastro.php" enctype="multipart/form-data" accept="image/*">
                <div class="small-collumn">
                    <label for="imagem">
                        <img src="../assets/add-image-icon.png" alt="">
                    </label>
                    <input type="file" name="imagem" id="imagem">
                </div>

                <div class="big-collumn">
                    <input class="form-control" type="text" name="modelo" placeholder="Modelo">
                    <input class="form-control" type="text" name="ano" placeholder="Ano">
                    <input class="form-control" type="text" name="marca" placeholder="Marca">
                    <input class="form-control" type="text" name="valor"  placeholder="Valor de venda">
                    <textarea class="form-control" type="text" name="observacao" placeholder="Observações"></textarea>
                    <input type="submit" style="margin-top: 10px;" value="Cadastrar" class="btn btn-danger form-control">
                </div>

            </form>
    </div>

    <script src="./scripts/index.js"></script>
  </body>

</html>

   