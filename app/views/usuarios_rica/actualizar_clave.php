<?php
use Core\FH;
?>
<div class="row">
   <div class="col-md-12">
      <div class="card">
         <div class="card-body">
            <form class="m-t" role="form" action="" method="post" id="frmClave">
               <div class="row form-group">
                  <?= FH::inputBlock('hidden', 'UserName', 'UserName', $this->usuario->UserName, ['class' => 'form-control', 'placeholder' => 'usuario'], ['class' => 'd-none col-md-6'], []) ?>
                  <?= FH::inputBlock('Password', 'Contraseña', 'Password', '', ['class' => 'form-control', 'placeholder' => 'Digite contraseña'], ['class' => 'col-md-6'], []) ?>
                  <?= FH::inputBlock('Password', 'Repita su contraseña', 'confirm', '', ['class' => 'form-control', 'placeholder' => 'Repita contraseña'], ['class' => 'col-md-6'], []) ?>
               </div>
               <div class="row text-center">
                  <div class="col align-self-center">
                     <a href="#" onClick="validar();" class="btn btn-success btn-block btn-flat">Guardar</a>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>