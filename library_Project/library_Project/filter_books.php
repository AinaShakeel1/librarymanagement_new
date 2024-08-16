<?php
// Include your database connection and functions
include('data_class.php');
$u = new data;
$u->setconnection();

// Get selected categories from the form
$selectedCategories = isset($_POST['categories']) ? $_POST['categories'] : [];

// Fetch the books with filtering
$recordset = $u->getbookcat($selectedCategories);

$table = "<table style='font-family: Arial, Helvetica, sans-serif; border-collapse: collapse; width: 100%;'>
            <tr>
                <th style='padding: 8px;'>Book Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Qnt</th>
                <th>Available</th>
                <th>Rent</th>
                <th>View</th>
            </tr>";

foreach ($recordset as $row) {
    $table.="<tr>";
    "<td>$row[0]</td>";
        $table.="<td>$row[2]</td>";
        $table.="<td>$row[6]</td>"; //category
        $table.="<td>$row[7]</td>";
        $table.="<td>$row[8]</td>";
        $table.="<td>$row[9]</td>";
        $table.="<td>$row[10]</td>";
        $table.="<td><a href='admin_service_dashboard.php?viewid=$row[0]'><button type='button' class='btn btn-primary'>View BOOK</button></a></td>";
        // $table.="<td><a href='deletebook_dashboard.php?deletebookid=$row[0]'>Delete</a></td>";
        $table.="</tr>";
}
$table .= "</table>";

echo $table;
?>
