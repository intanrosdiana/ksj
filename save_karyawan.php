<?php
include "connect.php";
	$id_simpanan 		= $_POST['id_simpanan'];
	$id_petugas 		= $_POST['id_petugas'];
	$id_anggota			= $_POST['id_anggota'];
	$nm_simpanan 		= $_POST['nm_simpanan'];
	$tgl_simpanan		= $_POST['tgl_simpanan'];
	$besar_simpanan 	= $_POST['besar_simpanan'];
	$ket 				= $_POST['ket'];
	$query				= mysql_query 
					("INSERT INTO simpanan 
					(id_simpanan,id_petugas,id_anggota,nm_simpanan,tgl_simpanan,besar_simpanan,ket) 
						VALUES
					('$id_simpanan','$id_petugas','$id_anggota','$nm_simpanan','$tgl_simpanan','$besar_simpanan','$ket')
		");//query sql untuk insert data
if($query){
	echo "sukses";
?><script>document.location.href="dashboard.php"</script><?php
}else{
echo "gagal:".mysql_error();
}
?>
</body>
</html>