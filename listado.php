    <?php 
    $title='List';
    require_once 'includes/header.php';
    require_once 'db/conn.php';

    // administrador login
    
    $usuario=$_POST['usuario'];
    $contrasena=$_POST['contrasena'];

    $sql = "SELECT * FROM administrador WHERE usuario = '$usuario' AND contrasena = '$contrasena'"; 

    $result = mysqli_query($conn, $sql); 

    if (mysqli_num_rows($result) == 1) {
        $title='Success'; 
        require_once 'includes/header.php';
    ?>
     <!-- profil -->
        <div class="card" style="width: 10rem;">
            <div class="card-body">

                <p class="card-text text-center"><?php echo $_POST['usuario'] . '<br/>'; ?></p>
            </div>
        </div>

    <div class="col">
        
        <!-- listado reservas  -->
        <?php
        $query = "SELECT * FROM reserva";
        echo "<h1><em> <center>Lista de reservas</center></em> </h1>";
        ?>

        <table class="table table-success table-striped-columns">
            <tr><th>#</th><th>Nombre</th><th>Apellidos</th><th>Teléfono</th><th>Email</th><th>Fecha Inicio</th><th>Fecha Fin</th><th>Número de Personas</th><th>Edad No.1</th><th>Edad No.2</th><th>Edad No.3</th><th>Forma de Pago</th><th>Precio Total</th><th>Número de Tarjeta</th></tr>

            <?php
            if ($result = mysqli_query($conn,$query)) {
                // SI RECUPERAS DATOS MUESTRALOS
                while ($row = $result->fetch_assoc()) {
                    $id = $row["id"];
                    $nombre= $row['nombre'];
                    $apellidos= $row['apellidos'];
                    $telefono= $row['telefono'];
                    $email = $row["email"];
                    $fecha_inicio= $row['fecha_inicio'];
                    $fecha_fin= $row['fecha_fin'];
                    $num_personas= $row['num_personas'];
                    $edad1 = $row["edad1"];
                    $edad2= $row['edad2'];
                    $edad3= $row['edad3'];
                    $forma_pago= $row['forma_pago'];
                    $precio_total= $row['precio_total'];
                    $numero_tarjeta= $row['numero_tarjeta'];
                    echo '<tr><td>'.$id.'</td><td>'.$nombre.'</td><td>'.$apellidos.'</td><td>'.$telefono.'</td><td>'.$email.'</td><td>'.$fecha_inicio.'</td><td>'.$fecha_fin.'</td><td>'.$num_personas.'</td><td>'.$edad1.'</td><td>'.$edad2.'</td><td>'.$edad3.'</td><td>'.$forma_pago.'</td><td>'.$precio_total.'</td><td>'.$numero_tarjeta.'</td></tr>';
                }
                /*LIMPIA*/
                $result->free();
            }
            mysqli_close($conn)
            ?>

        </table>
    </div>







    <?php  
    } else { 
        // Login failed 
        echo "<div class='alert alert-danger' role='alert'>Credenciales inválidas. Por favor, inténtelo de nuevo.</div>"; 
    } 


    ?>




    <?php require_once 'includes/footer.php' ?>
