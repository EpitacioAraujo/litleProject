    <main>
        <div class="row"> 
            <?php echo $conteudo; ?>
        </div>
    </main>

   <div>
      <?php echo $modals;?>
   </div>

    <div id="register-car-modal" class="register-car">
            <header id="close-register-car">
                x
            </header>
            <form method="POST" action="cadastro.php" enctype="multipart/form-data" accept="image/*">
                <div class="small-collumn">
                    <label for="imagem">
                        <img id="preview" src="../assets/add-image-icon.png" alt="">
                    </label>
                    <input type="file" required name="imagem" id="imagem">
                </div>

                <div class="big-collumn">
                    <input class="form-control" required type="text" name="modelo" placeholder="Modelo">
                    <input class="form-control" required type="text" name="ano" placeholder="Ano">
                    <input class="form-control" required type="text" name="marca" placeholder="Marca">
                    <input class="form-control" required type="text" name="valor"  placeholder="Valor de venda">
                    <textarea class="form-control" required type="text" name="observacao" placeholder="Observações"></textarea>
                    <input type="submit" value="Cadastrar" class="mt-4 btn btn-danger form-control">
                </div>

            </form>
    </div>

    <script src="./scripts/index.js"></script>
  </body>

</html>

   