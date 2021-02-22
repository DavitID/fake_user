<?php

// BANNER
function banner() {
echo "\n\033[1;33m((_,...,_))                           \n";
echo "\033[1;33m   |o o|     \033[1;37m[ \033[0;41mFAKE USER BY DAVIT ID\033[0m \033[1;37m]\033[0m\n";
echo "\033[1;33m   \   /                              \n";
echo "\033[1;33.    ^_^                               \n\n\n";
}

// REST API
$url = "https://ostch.herokuapp.com/api/v1/fakename?country=en";

// GET RESPONSE FROM URL
$res = file_get_contents($url);
$data = json_decode($res, true);
$nama = $data["name"];
$ultah = $data["birthday"];
$alamat = $data["address"];
$kota = $data["city"];
$negara = $data["country"];
$wilayah = $data["region"];
$zip_code = $data["zip"];
$telpon = $data["phone_number"];
$user = $data["username"];
$email = $data["email"];
$pass = $data["password"];

// TAMPILAN UTAMA
system("clear");
banner();
echo "\033[1;36m[\033[1;32m+\033[1;36m]\033[1;37m==============================\033[1;36m[\033[1;32m+\033[1;36m]\n\n";
echo "\033[1;31mNama          \033[1;33m: \033[1;32m$nama\n";
echo "\033[1;31mTanggal lahir \033[1;33m: \033[1;32m$ultah\n";
echo "\033[1;31mKota          \033[1;33m: \033[1;32m$kota\n";
echo "\033[1;31mAlamat        \033[1;33m: \033[1;32m$alamat\n";
echo "\033[1;31mNegara        \033[1;33m: \033[1;32m$negara\n";
echo "\033[1;31mWilayah       \033[1;33m: \033[1;32m$wilayah\n";
echo "\033[1;31mZip code      \033[1;33m: \033[1;32m$zip_code\n";
echo "\n\n\033[1;36m[\033[1;32m+\033[1;36m]\033[1;37m==============================\033[1;36m[\033[1;32m+\033[1;36m]\n\n";
echo "\033[1;31mUsername      \033[1;33m: \033[1;32m$user\n";
echo "\033[1;31mEmail         \033[1;33m: \033[1;32m$email\n";
echo "\033[1;31mPassword      \033[1;33m: \033[1;32m$pass\n\n\033[0m";

?>
