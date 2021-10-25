<?php
/*
$nama = $_POST['nama'];
#$nama = test_input($_POST['nama']);
echo "[$nama]";
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
*/

$kata = $_POST['kata'];
if (strlen($kata) < 6) {
    echo 'Maaf, kata laluan terlalu pendek';
} else {
    echo 'Kata laluan diterima';
}