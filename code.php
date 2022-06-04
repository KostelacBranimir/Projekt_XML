<?php
// Start php code
// Load xml file into xml_data variable
$xml_data = simplexml_load_file("xml_data.xml") or 
die("Error: Object Creation failure");
// Use foreach loop to display data and for sub elements access,
// We will use children() function
foreach ($xml_data->children() as $data)
{
    //display each sub element in xml file
    echo " ", $data->subjects . "<br> ";
    echo "Ulica : ", $data->name . "<br> ";
    echo "Radno vrijeme : ", $data->time . "<br> ";
    echo "Telefon : ", $data->telefon . "<br>";
    echo "------------------------------------";
    echo "<br>";
}
?>
