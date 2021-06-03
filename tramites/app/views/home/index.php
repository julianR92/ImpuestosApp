<?php $this->start('body'); ?>
    <div class="container-fluid px-0" style="background-image: url('<?=PROOT?>img/fondo_inicio.jpg'); background-position: bottom; background-size: cover; background-repeat: no-repeat;">
        <div style="opacity: 0.5; background-color: #000000; min-height: 60vh;"></div>
    </div>
    <div class="container-fluid mt-3 mb-2">
    	<div class="row justify-content-center">
	        <div class="col-md-4">
                <?php if(isset($this->logueado) && $this->logueado ):?>
                    <a class="btn btn-verde btn-block text-white font-weight-bold text-uppercase mb-5" href="<?=PROOT?>Users/logout">Cerrar sesión</a><br>
                <?php else:?>
                    <a class="btn btn-verde btn-block text-white font-weight-bold text-uppercase" href="<?=PROOT?>Users/login">Iniciar sesión</a>                    
                <?php endif;?>
	        </div>
        </div>
    </div>
<?php $this->end(); ?>