<?php

define('DEBUG', true); // asignar true: debug, false: produccion

define('DB_NAME', 'Impuestos'); // base de datos
define('DB_USER', 'GscSqlPqr'); // nuevo servidor ica
define('DB_PASSWORD', '2G8S1P4rT'); // nuevo servidor ica
define('DB_HOST', '131.110.1.21'); // nuevo servidor ica

//define('DB_NAME', 'IMPUESTO_PRED'); // base de datos
//define('DB_USER', 'impuserapp');   // servidor q estaba funcionando a la fecha 10/03/2021
//define('DB_PASSWORD', '%6eS7n]o2hO2');  // servidor q estaba funcionando a la fecha 10/03/2021
//define('DB_HOST', '131.110.1.30'); // servidor q estaba funcionando a la fecha 10/03/2021

define('DEFAULT_CONTROLLER', 'Home');
define('DEFAULT_LAYOUT', 'index');

define('PROOT', '/');
define('VERSION', '0.1');
define('LOGO', ''); //logo para insertar en correos


define('SITE_TITLE', 'Registro de contribuyentes'); // titulo de la pagina
define('MENU_BRAND', 'Registro de contribuyentes'); // titulo del menu

define('CURRENT_USER_SESSION_NAME', 'ContribuyenteskwXeusqldkiIKjehsLQZJFKJ'); //nombre de la sesion para usuarios logueados
define('REMEMBER_ME_COOKIE_NAME', 'ContribuyentesJAJEI6382LSJVlkdjfh3801jvD'); // cookie para usuarios con recordar contraseña
define('REMEMBER_ME_COOKIE_EXPIRY', 2592000); // tiempo en que expira la coockie (30 days)

define('ACCESS_RESTRICTED', 'Restricted'); // controlador de area restringida


define("SMTP_HOST", "smtp.office365.com");
define('SMTP_PORT', 587);
define('SMTP_SECURE', 'tls');
define("SMTP_USERNAME", "noreply@correo.co");
define("SMTP_PASSWORD", "xxxx");
define("SMTP_FROM", "noreply@correo.co");
define("SMTP_FROM_NAME", "Contribuyentes");