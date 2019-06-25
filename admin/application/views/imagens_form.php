<?php $this->load->view('header.php'); 
// if (!empty($imagens)) {
//     echo '<pre>';
//     var_dump($imagens);
//     echo '</pre>';
//     echo count($imagens[0]);
// }
?>

<script>
    function deletar(idProjeto, idImagem)
    {
        if (confirm('Tem certeza que deseja excluir essa imagem?')) {
		    window.location.href = "<?php echo base_url(); ?>imagens/exclui/"+idProjeto+"/"+idImagem;
	    }
    }
</script>

<div class="container">
            <h1>Imagens - <?php echo $nomeProjeto; ?></h1>
        <form action="<?php echo base_url('imagens/upload'); ?>" enctype="multipart/form-data" method="POST">
            <div class="row">
                <div class="col-md-10">
                    <div class="col-md-5">
                        <div class="form-group">
                            <input type="hidden" name="idProjeto" value="<?= $this->uri->segment(3) ?>">
                            <span style="color: red">* </span><label for="nome">Imagens: </label>
                            <input type="file" name="str_imagem" class="form-control" required>
                        </div> 
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <br>
                            <button type="submit" class="btn btn-success">Salvar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="row">
            <?php 
             if (!empty($imagens[0])) {
                for ($i = 0; $i < count($imagens); $i++) { 
                if ($i % 4 == 0) { ?>
                    </div>
                    <div class="row">
                <?php } ?>    
                <div class="col-lg-3 col-md-3 col-xs-3">
                <span style="cursor: pointer; text-align: right"><a onclick="deletar(<?=$imagens[$i]['id_projeto'] ?>, <?=$imagens[$i]['id']?>)"><i class="fas fa-trash-alt"></i></a></span>
                    <img style="width: 100%;" src="<?php echo DIRPROJ.'/'.$imagens[$i]['id_projeto'].'/'.$imagens[$i]['str_imagem']; ?>"></img>
                </div>
            <?php }
             }   ?>
            
            
            <!-- <div class="col-lg-3 col-md-3 col-xs-3">
                <img style="width: 100%;" src="<?php echo base_url('./../projetos/7/banner2.jpg'); ?>"></img>
            </div>
            <div class="col-lg-3 col-md-3 col-xs-3">
                <img style="width: 100%;" src="<?php echo base_url('./../projetos/7/mask.jpg'); ?>"></img>
            </div>
            <div class="col-lg-3 col-md-3 col-xs-3">
                <img style="width: 100%;" src="<?php echo base_url('./../projetos/7/comment.jpg'); ?>"></img>
            </div>
            <div class="col-lg-3 col-md-3 col-xs-3">
                <img style="width: 100%;" src="<?php echo base_url('./../projetos/7/mask.jpg'); ?>"></img>
            </div> -->
        </div>
</div>