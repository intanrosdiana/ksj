<?php
include ('connect.php');
	$id_simpanan 		= $_POST['id_simpanan'];
	$id_petugas 		= $_POST['id_petugas'];
	$id_anggota 		= $_POST['id_anggota'];
	$nm_simpanan 		= $_POST['nm_simpanan'];
	$tgl_simpanan 		= $_POST['tgl_simpanan'];
	$besar_simpanan 	= $_POST['besar_simpanan'];
	$ket 				= $_POST['ket'];
	$query				= mysql_query
							("UPDATE simpanan  SET 	id_simpanan='$id_simpanan',
													id_petugas='$id_petugas',
													id_anggota='$id_anggota',
													nm_simpanan='$nm_simpanan',
													tgl_simpanan='$tgl_simpanan',
													besar_simpanan='$besar_simpanan',
													ket='$ket'
							WHERE id_simpanan='$id_simpanan'");
?><script>document.location.href='dashboard.php'</script>
<?php
if ($query){
	echo "sukses";
} else {
	echo "gagal".mysql_error();
}
	?>