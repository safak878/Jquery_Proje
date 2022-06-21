<?php 

require_once "baglan.php"; 


if (isset($_POST['bilgiekle'])) {
	


	$bilgiekle=$db->prepare("INSERT INTO bilgi SET 


		bilgi_ad=:bilgi_ad,
		bilgi_soyad=:bilgi_soyad
		");

	$insert=$bilgiekle->execute(array(

		'bilgi_ad' => $_POST['ad_ekle'],
		'bilgi_soyad' => $_POST['soyad_ekle']

	));


	if ($insert) {
		
		echo "Kayıt Başarıyla Eklendi";
	}




}



if (isset($_POST['bilgiduzenle'])) {
	


	$bilgiekle=$db->prepare("UPDATE bilgi SET 


		bilgi_ad=:bilgi_ad,
		bilgi_soyad=:bilgi_soyad
		WHERE bilgi_id={$_POST['bilgi_id']}");

	$update=$bilgiekle->execute(array(

		'bilgi_ad' => $_POST['ad_duzenle'],
		'bilgi_soyad' => $_POST['soyad_duzenle']

	));


	if ($update) {
		
		echo "Kayıt Başarıyla Güncellendi";
	}




}

?>