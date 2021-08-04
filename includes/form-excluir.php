<div class="container">

    <form method="POST" action="<?php echo 'excluir.php?id='.$id;?>">
        <p>Tem certeza que deseja excluir o <strong><?php echo $veiculo['modelo'];?></strong>?</p>
        <a href="/" class="btn btn-primary">Cancelar</a>
        <button type="submit" class="btn btn-danger" name="btnExcluir">Confirmar</button>
    </form>
  
</div>