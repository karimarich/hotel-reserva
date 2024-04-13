 <?php 
    $title='Hotel';
    require_once 'includes/header.php';
    require_once 'db/conn.php';
      
    $id=$_GET['id'];            
   
   ?>

<div class="container text-center">
      <div class="row">
        <div class="col-md-6 offset-md-3">
    <form action="success.php" method="post" name="formulario" onsubmit="return mainFunction();" >  
<!--//////////////////////////////////////////////////////////////////// habti_id-->
      <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping">habti_id</span>
        <input class="form-control" type="text"  name="habi_id" value="<?php  echo $_GET['id']; ?>">   
      </div>
<!--//////////////////////////////////////////////////////////////////// precio_id--> 
        <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping">precio</span>
        <input class="form-control" type="text" name="precio" value="<?php echo $_GET['precio']; ?>" id="precio_intial" >   
      </div>
<!--//////////////////////////////////////////////////////////////////// Nombre-->       
  
      <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping">Nombre</span>
        <input class="form-control" type="text" placeholder="nombre" id="nombre_id" name="nombre"  >   
      </div>
<!--//////////////////////////////////////////////////////////////////// Apellidos-->       
      <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping">Apellidos</span>
        <input class="form-control" type="text" placeholder="Apellido" id="apellidos_id" name="apellidos" >
        
      </div>
<!--//////////////////////////////////////////////////////////////////// Tele No.-->
      <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping">Tele No.</span>
        <input class="form-control" type="text" placeholder="123 456 7890" id="tele_id" name="telefono" >
        
      </div>
<!--//////////////////////////////////////////////////////////////////// Correo Electronico-->
      <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping">Correo Electronico</span>
        <input class="form-control" type="email" placeholder="correo electronico" id="emailCorreo" name="email" >       
      </div>
<!--//////////////////////////////////////////////////////////////////// Fecha-->       
      <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping">Fecha Inicio</span>
        <input class="form-control" type="date" id="inputfecha1" name="fecha_inicio" value="<?php echo date('Y-m-d'); ?>" > 
      </div>
      <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping">Fecha Fin</span>
        <input class="form-control" type="date" id="inputfecha2" name="fecha_fin" value="<?php echo date('Y-m-d'); ?>" > 
      </div>
<!--//////////////////////////////////////////////////////////////////// num_personas -->        
      <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping">number de personas</span>
        <input class="form-control" type="text" placeholder="number de personas" name="num_personas" id="numPersonas" >
        
      </div>    
<!--//////////////////////////////////////////////////////////////////// Edad1-->
      <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping">Persona No 1.</span>
        <input class="form-control" type="text" placeholder="edad" id="edadNo1" name="edad1" >     
      </div>
<!--//////////////////////////////////////////////////////////////////// Edad2-->        
      <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping">Persona No 2.</span>
        <input class="form-control" type="text" placeholder="edad" id="edadNo2" name="edad2" >       
      </div>
<!--//////////////////////////////////////////////////////////////////// Edad3-->       
      <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping">Persona No 3.</span>
        <input class="form-control" type="text" placeholder="edad" id="edadNo3" name="edad3" >
        
      </div>
<!--//////////////////////////////////////////////////////////////////// comida-->

      <div class="input-group flex-nowrap">
          <span class="input-group-text" id="addon-wrapping">Restaurante</span>
          <select class="form-select" id="select" name="comida" >
              <option value="0">Seleccionar</option> 
              <option value="1">Desayuno</option>
              <option value="2">Media pension</option>
              <option value="3">Pension completa</option>
          </select>
          
      </div>    
<!--//////////////////////////////////////////////////////////////////// Precio total-->
      
      <div class="input-group flex-nowrap">
          <span class="input-group-text" id="addon-wrapping">Precio Total</span>
          <input class="form-control" id="preciototal_id" name="precio_total" readonly >
      </div>
<!--//////////////////////////////////////////////////////////////////// pago-->

      <div class="input-group flex-nowrap">
        <label form="pago"  name="forma_pago" >Forma pago</span><br/>
        <input type="radio" name="forma_pago" value="efectivo"  />Efectivo<br/>
        <input type="radio" name="forma_pago" value="tarjeta" />Tarjeta<br/>

      </div>
<!--//////////////////////////////////////////////////////////////////// Tarjeta No.-->
      <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping">Tarjeta No.</span>
        <input class="form-control" type="text" placeholder="5999564615241456" id="tarjeta" name="numero_tarjeta" >
        
      </div>
<!--////////////////////////////////////////////////////////////////////submit-->
      <br><br>
    <div class="d-grid gap-2">
       <input type="submit" value="Enviar" class="btn btn-outline-warning" name="submit">
    </div>
    
   
  </form>

        </div>
      </div>
    </div>

  <script type="text/javascript">


      function mainFunction() {
          var NomValid = Nombre();
          var ApelValid = Apellidos();
          var TeleValid = Tele();
          var EmailValid = Email();
          var fecha_dateValid = fecha_Com();
          var nemroValid = numeroPersonas();
          var persona1Valid = persona1();
          // var persona2Valid = persona2();
          // var persona3Valid = persona3();
          var Resta_hotelValid = Resta_hotel();
          var preciototalValid = preciototal();
          var pagoFValid = validarPago();
          

          if (NomValid && ApelValid && TeleValid && EmailValid && fecha_dateValid && persona1Valid && preciototalValid && nemroValid && Resta_hotelValid && pagoFValid ) {
              console.log("hecho Valid  ");
              return true;
          } else {
              console.log("error");
              return false;
          }
      }


// ***************************************************nombre
  	function Nombre(){
          var nom = document.getElementById('nombre_id').value;
          if (nom.length == 0) { 
              console.log('Nombre is required'); 
              return false;
          }
          if (!nom.match(/^[a-zA-ZÀ-ÿ\s]{2,40}$/)) {
              console.log('nombre error'); 
              return false;
          }
          console.log(nom); 
          return true;
      }
// ***************************************************Apellidos
      function Apellidos(){
          var apill = document.getElementById('apellidos_id').value;
          if (apill.length == 0) { 
              console.log('apellido is required'); 
              return false;
          }
          if (!apill.match(/^[a-zA-ZÀ-ÿ\s]{2,40}$/)) {
              console.log(' Error apellido.'); 
              return false;
          }
          console.log(apill); 
          return true;
      }
// ***************************************************telefono validacion
       function Tele(){
          var tel = document.getElementById('tele_id').value;
          if (tel.length == 0) { 
              console.log('Tele is required'); 
              return false;
          }
          if (!tel.match(/^\d{7,14}$/)) {
              console.log('Invalid Tele. '); 
              return false;
          }
          console.log('tel'); 
          return true;
      }
// ***************************************************email validacion      
      function Email(){
          var mail = document.getElementById('emailCorreo').value;
          if (mail.length == 0) { 
              console.log('email is required'); 
              return false;
          }
          if (!mail.match(/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/)) {
              console.log('Error email '); 
              return false;
          }
          console.log(mail); 
          return true;
      }
// ***************************************************fecha validacion 
      function fecha_Com(daysDifference) {
          var fecha1 = document.getElementById("inputfecha1").value;
          var fecha2 = document.getElementById("inputfecha2").value;

          if (!fecha1 || !fecha2) {
              alert('Por favor, selecciona ambas fechas.');
              return false;
          }

          var varfecha1 = new Date(fecha1);
          var varfecha2 = new Date(fecha2);
          var hoy = new Date();
          var hastareserva = new Date("2024-12-25T23:59:30");

          if (varfecha1 >= hoy && varfecha2 >= hoy) {
              if (varfecha2 > varfecha1) {
                  if (varfecha1 <= hastareserva && varfecha2 <= hastareserva) {
                      var difference = varfecha2.getTime() - varfecha1.getTime();
                      daysDifference = Math.ceil(difference / (1000 * 60 * 60 * 24));
                      if (daysDifference < 15) {
                          console.log("dias:", daysDifference);
                          return daysDifference;
                      } else {
                          console.log('  no mas 15 dias   no despues el 25 de diciembre de 2024.');
                          return false;
                      }
                  } else {
                      console.log('incorrecto');
                      return false;
                  }
              } else {
                  console.log('Selecciona fechas futuras.');
                  return false;
              }
          }
      }
// ***************************************************numeroPersonas validacion
       function numeroPersonas(){
          var numer = document.getElementById('numPersonas').value;
          if (numer.length == 0 ) { 
              console.log('cuanto personas'); 
              return false;
          }
          if (!numer.match(/^\d{1}$/) || numer >=4) {
              console.log('incorrecto '); 
              return false;
          }
          console.log('correcto'); 
          return true;
      }     
// ***************************************************Edad1 validacion 
      function persona1() {
          var ageEdad1 = parseInt(document.getElementById("edadNo1").value); // Parse value as integer
          

          if (ageEdad1 < 18) {
              console.log('Error: Edad inválida para la persona 1');
              return false;
          } 
          return true;
      }
// ***************************************************Edad2 validacion 
        function persona2() {  
            var ageEdad2 = parseInt(document.getElementById("edadNo2").value);
            var precio_2 = 0; 

            if (ageEdad2 > 0 && ageEdad2 < 18) {
                precio_2 = 15; 
            } else if (ageEdad2 >= 18) {
                precio_2 = 30; 
            }
            return precio_2; 
        }  
// ***************************************************Edad3 validacion 
      function persona3() {  
          var ageEdad3 = parseInt(document.getElementById("edadNo3").value);
          var precio_3 = 0; 

          if (ageEdad3 > 0 && ageEdad3 < 18) {
              precio_3 = 15; 
          } else if (ageEdad3 >= 18) {
              precio_3 = 30; 
          }
          return precio_3; 
      }
// ***************************************************comida validacion
      function Resta_hotel() {
          const selectValue = document.getElementById("select").value;
          console.log("Selected:", selectValue);
          let precio_comida;

          if (selectValue === "1") {
              precio_comida = 10;
          } else if (selectValue === "2") {
              precio_comida = 40;
          } else if (selectValue === "3") {
              precio_comida = 90;
          } else {
              precio_comida = 0; 
          }

          
          return precio_comida;
      }
// ***************************************************precio validacion
      function preciototal() {
          var precio_base =parseFloat(document.getElementById("precio_intial").value);
          var precio_comida = Resta_hotel();  
          var precio_2 = persona2(); 
          var precio_3 = persona3();
          var dias=fecha_Com();

          
          var total = (precio_base + precio_comida +  precio_2 + precio_3)*dias * 1.21; 
              
          
          document.getElementById("preciototal_id").value = total.toFixed(2) + " €";

          console.log(total);
          return total;
      }
// ***************************************************forma de pago validacion
function validarPago() {
    var pagoForma = document.getElementsByName("forma_pago");
    var isChecked = false;
    var selectedPaymentMethod = null;

    for (var i = 0; i < pagoForma.length; i++) {

        if (pagoForma[i].checked) {
            console.log("Elemento: " + pagoForma[i].value + " Seleccionado: " + pagoForma[i].checked);
            isChecked = true;
            selectedPaymentMethod = pagoForma[i].value;
            break;
        }
    }

    if (!isChecked) {

        console.log("seleccione una forma de pago.");
        return false;
    }

    if (selectedPaymentMethod === "tarjeta") {

        var tarje = document.getElementById('tarjeta').value;

        if (tarje.length === 0 || !tarje.match(/^(4|5)\d{15}$/)) { // Adjusted to match exactly 16 digits total

            console.log('El número no es valido.');

            return false; // Return false if credit card number is invalid
        }
    }

    console.log("Pago realizado ");
    return true;
}

  </script>



<?php require_once 'includes/footer.php' ?>