<?php 
$domain = "https://demo.connect.easyparcel.my/?ac=Webhook";

$action = "EPTrackingBulk";
$postparam = array(
'api'	=> 'xxxxxx',
'bulk'	=> array(
array(
'awb_no'	=> '238725129086',
),
array(
'awb_no'	=> '238725129086',
),
),
);

$url = $domain.$action;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postparam));
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

ob_start(); 
$return = curl_exec($ch);
ob_end_clean();
curl_close($ch);

$json = json_decode($return);
echo "<pre>"; print_r($json); echo "</pre>";
?>