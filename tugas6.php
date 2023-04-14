<?php
	if (isset($_GET['nama']) AND isset($_GET['email']))
{
   date_default_timezone_set('Asia/Jakarta'); // Zona Waktu indonesia
   $nama=$_GET['nama'];
   $email=$_GET['email'];
   $jam = date('l, d-m-Y  H:i:s');
   echo "<p>Anda login pada $jam.</p>";
}  
	if (!empty($nama))
{
    echo "Nama: $nama <br>";
}
	else
{
    die("Tolong isi nama anda!");
}

	if (!empty($email))
{
    echo " Email : $email <br>";
}
	else
{
    die("Tolong isi alamat email anda!");
}


?>
<?php
	if (isset($_GET['nama']) AND isset($_GET['email']))
{
   date_default_timezone_set('Asia/Jakarta'); // Zona Waktu indonesia
   $nama=$_GET['nama'];
   $email=$_GET['email'];
   $jam = date('l, d-m-Y  H:i:s');
   echo "<p>Anda login pada $jam.</p>";
}  
	if (!empty($nama))
{
    echo "Nama: $nama <br>";
}
	else
{
    die("Tolong isi nama anda!");
}

	if (!empty($email))
{
    echo " Email : $email <br>";
}
	else
{
    die("Tolong isi alamat email anda!");
}


?>