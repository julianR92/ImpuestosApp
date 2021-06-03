<?php

use Core\Router;
use Core\H;
use App\Models\Aspirantes;
use Core\Session;
use Core\FH;
?>
<?php if (!empty(Aspirantes::currentUser())) : ?>
   <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
         <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"> <?= Aspirantes::currentUser()[0]->nombres; ?> </a>
         <ul class="dropdown-menu dropdown-menu-right">
            <li>
               <a aria-haspopup="true" aria-expanded="false" class="dropdown-item" href="<?= PROOT ?>aspirantes/misCursos">Mis Cursos</a>
            </li>
            <li>
               <a aria-haspopup="true" aria-expanded="false" class="dropdown-item" href="<?= PROOT ?>aspirantes/resetContraseña/<?= Aspirantes::currentUser()[0]->id ?>">Cambiar contraseña</a>
            </li>
            <li>
               <a aria-haspopup="true" aria-expanded="false" class="dropdown-item" href="<?= PROOT ?>aspirantes/logout">Cerrar sesión</a>
            </li>
         </ul>
      </li>
   </ul>
<?php endif; ?>