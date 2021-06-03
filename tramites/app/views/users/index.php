<?php $this->setSiteTitle('Listado de usuarios')?>

<?php $this->start('head'); ?>
    <link rel="stylesheet" href="<?=PROOT?>css/datatables/datatables.min.css">
    <link rel="stylesheet" href="<?=PROOT?>css/datatables/dataTables.bootstrap4.min.css">
<?php $this->end(); ?>

<?php $this->start('body'); ?>
<div class="card border-success">
  <div class="card-header text-center bg-success text-white">
  <h4>Listado de usuarios</h4>
  </div>
  <div class="card-body">
      <table id="tabla" class="table-striped table-condensed table-bordered table-hover" style="width:100%">
        <thead class="bg-info text-center">
            <th class="col-auto">Usuario</th>
            <th class="col-auto">Documento</th>
            <th class="col-auto">Nombre Completo</th>
            <th class="col-auto">Correo</th>
            <th class="col-auto">Entidad</th>
            <th class="col-auto">Programa</th>
            <th class="col-auto">Rol</th>
            <th class="col-auto">Estado</th>
            <th class="col-auto" data-filterable="false">Acciones</th>
        </thead>
        <tbody class="small text-center">
          <?php foreach($this->users as $user): ?>
            <?php if($this->currentUser->id==$user->id):?>
              <tr class="bg-success text-white">
            <?php else:?>
              <tr>
            <?php endif;?>
              <td><?=$user->user;?></a></td>
              <td><?=$user->documento?></td>
              <td><?=$user->nombres.' '.$user->apellidos;?></td>
              <td><?=$user->correo;?></td>
              <td><?=$user->entidad;?></td>
              <td><?=$user->programa;?></td>
              <td><?=$user->acl;?></td>
              <td><?=$user->estado?'ACTIVO':'INACTIVO';?></td>
              <td class="text-lg-center">
                
                <a href="<?=PROOT?>users/editar/<?=$user->id?>" class="btn btn-info btn-xs btn-sm">
                   <i class="fas fa-edit"></i>
                </a>
                <!--
                <a href="<?=PROOT?>users/eliminar/<?=$user->id?>" class="btn btn-danger btn-xs btn-sm" onclick="if(!confirm('Desea desactivar este usuario?')){return false;}">
                   <i class="fas fa-trash"></i>
                </a>
              -->

              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
  </div>
</div>
<?php $this->end(); ?>
<?php $this->start('footer'); ?>
  <script src="<?=PROOT?>js/datatables/dataTables.min.js"></script>
  <script src="<?=PROOT?>js/datatables/dataTables.bootstrap4.min.js"></script>
  <script src="<?=PROOT?>js/datatables/config.js"></script>
<?php $this->end(); ?>
