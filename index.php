<?php 
    $title='Hotel';
    require_once 'includes/header.php';
    require_once 'db/conn.php';
   ?>
    
<?php
// session_start(); // Start the session.

?>

<div class="row justify-content-center " >
      <!-- listado   -->
      <?php   
        $query = "SELECT * FROM habitaciones";
        echo "<h1><em> <center><h2>Hotel Of Dreams <br/></h2> </center> </em></h1>";
      ?>

                      
                            

                                <?php
                                if ($result = mysqli_query($conn,$query)) {
                                // SI RECUPERAS DATOS MUESTRALOS
                                while ($row = $result->fetch_assoc()) {


                                $id = $row["id"];
                                $tipo = $row["tipo"];
                                $info_habita = $row["info_habita"];
                                $precio = $row["precio"];
                                $vistas = $row["vistas"];


                                
                                
                               
                                
                                    

                                  echo '
                                        <div class="col-6 ">
                                        <p><img src="data:image/jpg;base64,'.base64_encode($row['image']).'" style="width:100%" class="img-thumbnail" /><p/>
                                        <p><h3>'.$tipo.'</h3></p>
                                        <p>'.$info_habita.'</p>
                                        <p>vista: '.$vistas.'</p>
                                        <p>'.$precio.'€</p>
                                        <p><a class="btn btn-primary" href="reserva.php?id='.$id.'&precio='.$precio.'" role="button">reserva</a></p>
                                        
                                        </div>
                                     ';

                                }
                                
                                $result->free();
                                }                       

                              ?>
                           
                
  </div>

<?php require_once 'includes/footer.php' ?>