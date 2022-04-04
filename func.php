<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<?php
$curl = curl_init();
curl_setopt_array($curl, array(
	CURLOPT_URL => 'https://v3.football.api-sports.io/teams?league=39&season=2021&',
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => '',
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 0,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => 'GET',
	CURLOPT_HTTPHEADER => array(
		'x-rapidapi-key: 06e579cb3495c840201e0e7869b648b7'
	),
));
$response = curl_exec($curl);
curl_close($curl);
print_r($response);
$jsonData = $response;
file_put_contents('t.json', $jsonData)
?>
<script>

</script>

<body>

</body>

</html>