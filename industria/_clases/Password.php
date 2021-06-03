<?php
/**
Software:        SEM
Desarrollador:   Hugo Andres Pedroza Rodriguez -Julian Rincon - Exneider Realpe
Versiòn:         1.0
Todos los derechos reservados 2020
@copyrigth
**/

#Clase para cifrar y descifrar contraseñas metodo hash
class Password {

    public static function hash($password) {
        return password_hash($password, PASSWORD_DEFAULT, ['cost' => 10]);
        
    }

    public static function verify($password, $hash) {
        return password_verify($password, $hash);
    }
}
?>