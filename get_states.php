<?php
include "db.php";
$db=connect();
$query=$db->query("select * from pilares where alcaldia_idalcaldia=$_GET[alcaldia_idalcaldia]");
$states = array();
while($r=$query->fetch_object()){ $states[]=$r; }
if(count($states)>0){
print "<option value=''>Selecciona</option>";
foreach ($states as $s) {
	print "<option value='$s->idPilares'>$s->nombre</option>";
}
}else{
print "<option value=''>-- NO HAY DATOS --</option>";
}
?>