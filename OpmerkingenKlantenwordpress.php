<?php

if (isset($_POST['button'])){
function deleteRij()
{





    if (isset($_POST['delete'])) {


        $id = $_POST['id'];
        $query = "DELETE FROM form_entry WHERE id = '$id'";
        $query_run = mysqli_query($wpdb, $query);

        if ($query_run) {
            echo '<script> alert("Data Deleted"); </script>';
        } else {
            echo '<script> alert("Data Not Deleted"); </script>';
        }


    }
}
}

/** Code die de tabel aanmaakt en er voor zorgt dat de juiste gegevens erin geprint worden */
function tabel()
{}
global $wpdb;
$result = $wpdb->get_results( "SELECT first_name, last_name, email, mobile, comment FROM form_entry");

echo "<style>";
echo "body {font-family: Arial;}";

echo ".table_container { padding: 10px 12px 0px 12px;  border: 1px solid #ccc;  }";
echo ".table_container th { background-color:lightblue; color:white; font-weight:bold; border-left: 1px solid white;}";
echo "</style></head>";
echo "<body>";

echo "<div class=\"table_container\"><table>";
echo "<tr><th style=\"padding-left:10px;\">Naam</th><th>Achternaam</th><th>Email</th><th>Telefoonnummer</th><th>Vraag/Opmerking</th><th>Delete</th></tr>";
foreach ($result as $row) {
    echo "<tr><td>" . $row->first_name . "</td><td>" . $row->last_name . "</td><td>" . $row->email . "<td>" . $row->mobile . "</td><td>" . $row->comment . "<td><button type='submit' name='button' value='deleteRij'>deleteRij</button></tr>";
}
echo "</table></div>";



