<?php 

  //  $db_handle = new DBController();
$query = "SELECT * FROM Login";
// $results = $db_handle->runQuery($query);
$results = $this->db->runQuery($query);
    //var_dump($results);
?>

<?php
    foreach ($results as $responsables) {
?>
<?php echo $responsables["idLogin"]; ?> - <?php echo $responsables["nombre"]; ?> - <?php echo $responsables["contraseña"];  echo '<br>'?>
<?php
}
?>
