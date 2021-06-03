<?php

define('DEBUG', true); // asignar true: debug, false: produccion

define('DB_NAME', 'vive_digital'); // base de datos
define('DB_USER', 'root');    // usuario
define('DB_PASSWORD', '');    // password
define('DB_HOST', 'localhost'); // hosting

define('DEFAULT_CONTROLLER', 'Home'); // controlador por defecto
define('DEFAULT_LAYOUT', 'index'); // layout por defecto

define('PROOT', '/tramites/'); // set this to '/' for a live server
define('VERSION', '0.1'); // version de la aplicacion
define('LOGO', 'http://localhost/pvd/'); // set this to '/' for a live server


define('SITE_TITLE', 'Vive Digital'); // titulo de la pagina
define('MENU_BRAND', 'Vive Digital'); // titulo del menu

define('CURRENT_USER_SESSION_NAME', 'ViveDigitalkwXeusqldkiIKjehsLQZJFKJ'); //nombre de la sesion para usuarios logueados
define('CURRENT_USER_SESSION_NAME_ASPI', 'ViveDigitalASPIkwXeusqldkiIKjehsLQZJFKJ'); //nombre de la sesion para usuarios logueados
define('REMEMBER_ME_COOKIE_NAME_ASPI', 'ViveDigitalASPInJAJEI6382LSJVlkdjfh3801jvD'); // cookie para usuarios con recordar contraseña
define('REMEMBER_ME_COOKIE_NAME', 'ViveDigitalnJAJEI6382LSJVlkdjfh3801jvD'); // cookie para usuarios con recordar contraseña
define('REMEMBER_ME_COOKIE_EXPIRY', 2592000); // tiempo en que expira la coockie (30 days)

define('ACCESS_RESTRICTED', 'Restricted'); // controlador de area restringida


define("SMTP_HOST", "smtp.office365.com");
define('SMTP_PORT', 587);
define('SMTP_SECURE', 'tls');
define("SMTP_USERNAME", "noreplycovid@correo.uts.edu.co");
define("SMTP_PASSWORD", "Doh68513");
define("SMTP_FROM", "noreplycovid@correo.uts.edu.co");
define("SMTP_FROM_NAME", "UTS");