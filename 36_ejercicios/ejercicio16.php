<?php

$array = [
    "Frutas" => ["Manzana", "Sandia", "Platano", "Fresa"],
    "Deporte" => ["Tenis", "Baloncesto", "Golf", "Futbol"],
    "Idiomas" => ["Ruso", "Rumano", "Ucraniano", "Bieloruso"]
];
?>

<table>
    <tr>
        <th><?php echo "Frutas"; ?></th>
        <th><?php echo "Deporte"; ?></th>
        <th><?php echo "Idiomas"; ?></th>
    </tr>
    <tr>
        <td><?php echo $array["Frutas"][0]; ?></td>
        <td><?php echo $array["Deporte"][0]; ?></td>
        <td><?php echo $array["Idiomas"][0]; ?></td>
    </tr>
    <tr>
        <td><?php echo $array["Frutas"][1]; ?></td>
        <td><?php echo $array["Deporte"][1]; ?></td>
        <td><?php echo $array["Idiomas"][1]; ?></td>
    </tr>
    <tr>
        <td><?php echo $array["Frutas"][2]; ?></td>
        <td><?php echo $array["Deporte"][2]; ?></td>
        <td><?php echo $array["Idiomas"][2]; ?></td>
    </tr>
    <tr>
        <td><?php echo $array["Frutas"][3]; ?></td>
        <td><?php echo $array["Deporte"][3]; ?></td>
        <td><?php echo $array["Idiomas"][3]; ?></td>
    </tr>
</table>