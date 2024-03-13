<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>
<title>menu</title>
<style>

</style>
<?php
    $BASICINFOR = [
            'menu' => 'Basic Infor',
            'Emplyee ID' => '9',
            'LAST NAME' =>'Dodsworth',
            'First' =>'',
            'Gender' =>'',
            'Title' =>'',
            'Suffix' =>'',
            'BirthDate' =>'',
            'HireDate' =>'',
            'SSN' =>'',
            'Responto' => '',


    ];

    $Contact = [
            'menu' => 'Contact Infor',
            'Email' => '',
            'Address' =>'',
            'City' => '',
            'Region' => '',
            'Postalcode' => '',
            'Country' => '',
            'UShome' => '',
            'Photo' => '',


    ];

    $optionalinfor = [
            'menu' => 'Optional Infor',
            'Notes' => '',
            'Preferred' => '',
            'Active' => '',
            'Areyou' => '',

    ];
echo "<div class='Main'>";
echo '<h2 class="menu">Emplyee ID    '.$BASICINFOR["menu"].'</h2>';
echo '<h3>' .  $BASICINFOR['Emplyee ID']  . '</h3>';
echo '<h3>' .  $BASICINFOR['LAST NAME']  . '</h3>';

echo'</div>';


echo "</div>";

?>