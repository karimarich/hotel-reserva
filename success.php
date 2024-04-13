<?php 
    $title='Success';
    require_once 'includes/header.php';
    require_once 'db/conn.php';

    if(isset($_POST['submit'])){
        
        $nombre= $_POST['nombre'];
        $apellidos= $_POST['apellidos'];
        $telefono= $_POST['telefono'];
        $email= $_POST['email'];
        $fecha_inicio= $_POST['fecha_inicio'];
        $fecha_fin= $_POST['fecha_fin'];
        $num_personas= $_POST['num_personas'];
        $edad1= $_POST['edad1'];
        $edad2= $_POST['edad2'];
        $edad3= $_POST['edad3'];
        $forma_pago= $_POST['forma_pago'];
        $precio_total= $_POST['precio_total'];
        $numero_tarjeta= $_POST['numero_tarjeta'];

        $isSuccess =  $crud->insert($nombre, $apellidos ,$telefono ,$email, $fecha_inicio, $fecha_fin, $num_personas, $edad1, $edad2, $edad3, $forma_pago, $precio_total, $numero_tarjeta);

        if($isSuccess){
            echo '<h1 class="text-center " style="color: blue;"> Su reserva ha sido completada con éxito. Esperamos con interés su llegada.</h1>';
        }else{
            echo '<h1 class="text-center text-danger">su reserva no se ha podido procesar correctamente</h1>';
        }


    }
?>

<?php require_once 'includes/footer.php' ?>
