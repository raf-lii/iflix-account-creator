<?php

echo "\n";
echo "############################\n";
echo "#    AUTO CREATE NETFLIX   #\n";
echo "#https://github.com/raf-lii#\n";
echo "############################\n";
echo "\n";
echo "\n";

echo "Jumlah: ";
$jum = trim(fgets(STDIN));

echo "\n";

for ($i = 0;$i < $jum;$i++) {

$rand = rand(1, 999999);
$ch = curl_init();

$data = '{"deviceId":"ea2a5aa5-a754-4d81-8c62-151dd8c0eaad-ixdj","deviceName":"Linux armv8l","name":"Rafli","email":"sgb-team'.$rand.'@gmail.com","password":"kontol1"}';

curl_setopt($ch, CURLOPT_URL, "https://www.iflix.com/api/identity/v4/register");
curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$headers = array(
"user-agent:Mozilla/5.0 (Linux; Android 9; CPH1819) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Mobile Safari/537.36",
"content-type:application/json",
"accept:application/json"
);

curl_setopt($ch, CURLOPT_HEADER, $headers);

curl_exec($ch);

    echo "[?]Sukses! => sgb-team$rand@gmail.com | kontol1\n";
}
