<?php 

$id_pro = $_GET['pro_tujuan'];
$id_kab = $_GET['kab_tujuan'];

$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "http://api.rajaongkir.com/starter/city?id=$id_kab&province=$id_pro",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "key: cbd75a62d0e48833f6c80ac7e5324e42"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
   
    }
  $data = json_decode($response, true);
  echo "<input type='text' class='form-control' id='pos_tujuan' value='".$data['rajaongkir']['results']['postal_code']."' readonly>"; 


?>