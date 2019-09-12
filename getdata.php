<?php 
 
	
	//Importing database
	require_once('koneksi.php');
	
	//Membuat SQL Query dengan pegawai yang ditentukan secara spesifik sesuai ID
	$sql = "SELECT * FROM tb_pasien ORDER BY no_rm 
    DESC LIMIT 1";
	
	//Mendapatkan Hasil 
	$r = mysqli_query($con,$sql);
	
	//Memasukkan Hasil Kedalam Array
	$result = array();
	$row = mysqli_fetch_array($r);
	array_push($result,array(
		"no_rm"=>$row['no_rm']
		));
 
	//Menampilkan dalam format JSON
	echo json_encode(array('no_rm'=>$result));
	
    mysqli_close($con);

    /*$hasil         = mysqli_query("SELECT * FROM tb_pasien ORDER BY no_rm 
 DESC LIMIT 1/*SELECT * FROM tb_pasien WHERE no_rm IN (SELECT MAX(no_rm)
 FROM tb_pasien)") or die(mysqli_error());
 $json_response = array();

if(mysqli_num_rows($hasil)> 0){
while ($row = mysqli_fetch_array($hasil)) {
$json_response[] = $row;
}
echo json_encode(array('no_rm' => $json_response));}*/
?>



 
