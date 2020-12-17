<?php

// Jika udh dapat nilai atau provinsi 
$provinsi_tujuan_id = $_GET['prov_tujuan_id'];

$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.rajaongkir.com/starter/city?province=$provinsi_tujuan_id",
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
  for ($i=0; $i < count($data['rajaongkir']['results']); $i++) { 
        echo "<option value='".$data['rajaongkir']['results'][$i]['city_id']."'>".$data['rajaongkir']['results'][$i]['city_name']."</option>";
  }
?>