
 <?php
 class crud{

    //private database object\
    private $db;

    //constructor to initialize private variable to the database connection
    function __construct($conn){
        $this->db =$conn; 
    }

  public function insert($nombre, $apellidos, $telefono, $email, $fecha_inicio, $fecha_fin, $num_personas, $edad1, $edad2, $edad3, $forma_pago, $precio_total, $numero_tarjeta) {
    try {
        $sql = "INSERT INTO reserva (nombre, apellidos, telefono, email, fecha_inicio, fecha_fin, num_personas, edad1, edad2, edad3, forma_pago, precio_total, numero_tarjeta) 
                VALUES (:nombre, :apellidos, :telefono, :email, :fecha_inicio, :fecha_fin, :num_personas, :edad1, :edad2, :edad3, :forma_pago, :precio_total, :numero_tarjeta)";

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':apellidos', $apellidos);
        $stmt->bindParam(':telefono', $telefono);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':fecha_inicio', $fecha_inicio);
        $stmt->bindParam(':fecha_fin', $fecha_fin);
        $stmt->bindParam(':num_personas', $num_personas);
        $stmt->bindParam(':edad1', $edad1);
        $stmt->bindParam(':edad2', $edad2);
        $stmt->bindParam(':edad3', $edad3);
        $stmt->bindParam(':forma_pago', $forma_pago);
        $stmt->bindParam(':precio_total', $precio_total);
        $stmt->bindParam(':numero_tarjeta', $numero_tarjeta);

        $stmt->execute();
        return true;

    } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
    }
}



}



?>