 
 /*====================================================================
 =            SECTION DE FUNCIONES EN DE LAS CAJAS DE TEXT  
               BLOQUEAR TECLADO
 ====================================================================*/
 
 
 
  // FUNCION PARA DIRECCION
 function Direccion(n) {

         key = n.keyCode || n.which;
         tecla = String.fromCharCode(key).toLowerCase();
         numeros = "0123456789-#ñÑ.";
         especiales = [14, 15, 32, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83,
            84, 85, 86, 87, 88, 89, 90, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109,
            110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 130, 160, 161, 162, 163, 164, 165, 239
         ];
         tecla_especial = false
         for (var i in especiales) {
            if (key == especiales[i]) {
               tecla_especial = true;
               break;
            }
         }

         if (numeros.indexOf(tecla) == -1 && !tecla_especial)
            return false;
      }
       // FUNCION PARA DIRECCION
      function NumDoc(n) {

         key = n.keyCode || n.which;
         tecla = String.fromCharCode(key).toLowerCase();
         numeros = "0123456789-ñÑ";
         especiales = [14, 15, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83,
            84, 85, 86, 87, 88, 89, 90, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109,
            110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 130, 160, 161, 162, 163, 164, 165,
         ];
         tecla_especial = false
         for (var i in especiales) {
            if (key == especiales[i]) {
               tecla_especial = true;
               break;
            }
         }

         if (numeros.indexOf(tecla) == -1 && !tecla_especial)
            return false;
      }


      /** Esta funcion me permite controlar los caracteres que se van a diguitar en el campo Nombres y Apellidos **/
      function Letras(n) {

         key = n.keyCode || n.which;
         tecla = String.fromCharCode(key).toLowerCase();
         numeros = "ñÑ";
         especiales = [14, 15, 32, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83,
            84, 85, 86, 87, 88, 89, 90, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109,
            110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 130, 160, 161, 162, 163, 164, 165, 239
         ];
         tecla_especial = false
         for (var i in especiales) {
            if (key == especiales[i]) {
               tecla_especial = true;
               break;
            }
         }

         if (numeros.indexOf(tecla) == -1 && !tecla_especial)
            return false;
      }


      /**Esta funcion me permite convertir los textos digitados a mayusculas **/
      function aMayusculas(obj, id) {

         obj = obj.toUpperCase();
         document.getElementById(id).value = obj;
      }


      /** Esta funcion me devuelve solo los numeros se usa para las cajas varchar con opcion numerica o campos time y date**/
      function Numeros(e) {

         key = e.keyCode || e.which;
         tecla = String.fromCharCode(key).toLowerCase();
         letras = "0123456789";
         especiales = [8, 37];
         tecla_especial = false
         for (var i in especiales) {
            if (key == especiales[i]) {
               tecla_especial = true;
               break;
            }
         }

         if (letras.indexOf(tecla) == -1 && !tecla_especial)
            return false;
      }

      function userValidate(n) {

         key = n.keyCode || n.which;
         tecla = String.fromCharCode(key).toLowerCase();
         numeros = "0123456789ñÑ.@";
         especiales = [14, 15, 32, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83,
            84, 85, 86, 87, 88, 89, 90, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109,
            110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 130, 160, 161, 162, 163, 164, 165, 239
         ];
         tecla_especial = false
         for (var i in especiales) {
            if (key == especiales[i]) {
               tecla_especial = true;
               break;
            }
         }

         if (numeros.indexOf(tecla) == -1 && !tecla_especial)
            return false;
      }


   $(document).ready(function(){


      /*============================================================================
      =            input de usuarios
                  id = "user_validate"        maxlength =60
      ============================================================================*/
      
      
      $('#user_validate').change(function() {

            var inputdd09 = document.getElementById('user_validate').value;
            var ValInputdd09 = inputdd09.match(/^[a-zA-Z0-9\.@\s]{4,60}$/);
            if (ValInputdd09 == null) {


               alert("Solo se permiten los caracteres especiales (.), ni menos de 4 caracteres");
               $('#user_validate').focus();
               $('#user_validate').val('');

            }
         })

      /*============================================================================
      =            input de  nombres
                  id = "name_validate"        maxlength =20
      ============================================================================*/

       $('#name_validate').change(function(){       
        var input1 = document.getElementById('name_validate').value;       
        var ValInput1 = input1.match(/^[a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ ]{3,20}$/);
        if (ValInput1 == null) {         
          
          alert("No se permiten números, caracteres especiales, espacios o menos de tres(3) letras ni más de quince(20) letras");
          $('#name_validate').focus();
          $('#name_validate').val('');

        }             
      })

        /*============================================================================
      =            input de  apellidos
                  id = "name_validate"        maxlength =20
      ============================================================================*/

       $('#lastname_validate').change(function(){       
        var input1 = document.getElementById('lastname_validate').value;       
        var ValInput1 = input1.match(/^[a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ ]{3,20}$/);
        if (ValInput1 == null) {         
          
          alert("No se permiten números, caracteres especiales, espacios o menos de tres(3) letras ni más de quince(20) letras");
          $('#lastname_validate').focus();
          $('#lastname_validate').val('');

        }             
      })

         /*============================================================================
      =            input de  numero de documento
                  id = "document_validate"        maxlength =15
      ============================================================================*/

       $('#document_validate').change(function(){       
        var input1 = document.getElementById('document_validate').value;       
        var ValInput1 = input1.match(/^[a-zA-Z0-9\-]{5,15}$/);
        if (ValInput1 == null) {        
          
          alert("No se permiten espacios, solo se permite el carácter especial (-)");
          $('#document_validate').focus();
          $('#document_validate').val('');

        }             
      })

         /*============================================================================
      =            input de  direccion
                  id = "address_validate"        maxlength =100
      ============================================================================*/


       $('#address_validate').change(function(){

        var inputdd09 = document.getElementById('address_validate').value;
        var ValInputdd09 = inputdd09.match(/^[a-zA-Z0-9\-#\s]{5,100}$/);
        if (ValInputdd09 == null) {
          
          
    alert("Solo se permiten los caracteres especiales (#) (-) o menos de 5 digitos");
          $('#address_validate').focus();
          $('#address_validate').val('');

        }             
      });


         /*============================================================================
      =            input de  correo electronico
                  id = "email_validate"        maxlength =50
      ============================================================================*/


        $('#email_validate').change(function(){

        var input10 = document.getElementById('email_validate').value;
        var ValInput10 = input10.match(/^[a-zA-Z0-9\._-]+@[a-zA-Z0-9-]{4,}[.][a-zA-Z0-9\.]{2,12}$/);
        if (ValInput10 == null) {
          
          
    alert("Correo no valido, por favor revise");
          $('#email_validate').focus();
          $('#email_validate').val('');

        }             
      });

           /*============================================================================
      =            input de  telefono fijo      minlength = 7
                  id = "number_validate"        maxlength =10
      ============================================================================*/



          $('#number_validate').change(function(){

        var input8 = document.getElementById('number_validate').value;
        var ValInput8 = input8.match(/^[0-9]{7,10}$/);
        if (ValInput8 == null) {
          
          
        alert("No se permiten letras, caracteres especiales o menos de siete(7) digitos ni más de diez(10) digitos");
          $('#number_validate').focus();
          $('#number_validate').val('');

        }             
      })


       /*============================================================================
      =            input de  telefono movil     minlength = 10
                  id = "cel_validate"           maxlength =15
      ============================================================================*/



          $('#cel_validate').change(function(){

        var input8 = document.getElementById('cel_validate').value;
        var ValInput8 = input8.match(/^[0-9]{10,15}$/);
        if (ValInput8 == null) {
          
          
        alert("No se permiten letras, caracteres especiales o menos de diez(10) digitos ni más de quince(15) digitos");
          $('#cel_validate').focus();
          $('#cel_validate').val('');

        }             
      })




          /*============================================================================
      =            FUNCION DE VALIDAR CONTRASEÑAS IGUALES    
                  id = "pass_origin"               
                  id = "confirmate_pass"               maxlength =20

      ============================================================================*/



          $('#confirmate_pass').change(function(){

        var password = document.getElementById('pass_origin').value;
        var password_confirmate = document.getElementById('confirmate_pass').value;
       
        if (password_confirmate !== password) {
                    
        alert("Las contraseñas no coinciden, escribelas de nuevo");
        $('#pass_origin').val('');
        $('#confirmate_pass').val('');
        $('#pass_origin').focus();      


       
        }             
      })










   })

