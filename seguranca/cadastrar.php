<?php 

$email = $_POST['inputEmail'];

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
    "secret"=>"6LfLw3gUAAAAADCNZnpwUz5_yEgWvRnmBnIok8y7",
    "response"=>$_POST["g-recaptcha-response"],
    "remoteip"=>$_SERVER["REMOTE_ADDR"]
)));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$recaptcha = json_decode( curl_exec($ch), true );

if ( $recaptcha["success"] ) {
    echo "OK " . $_POST["inputEmail"];
} else {
    header("Location: exemplo-04.php");
}

?>