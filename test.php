<?php
function POST_captcha($user_response) {
$fields_string='';
$field=array (
'secret' =>'6Le9SC4UAAAAAOhG-K7gg_4V9VvjaJeKDpnfW4Mz';
'response' => $user_response);
foreach($fields as $key => $value)
$fields_string.=$key . '=' . $value . '&';
$fields_string= rtrim($feilds_string, '&');
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,'https://www.google.com/recaptcha/api/siteverify');
curl_setopt($ch,CURLOPT_POST,count($feilds));
curl_setopt($ch,CURLOPT_RETURNTRANSFER,True);
$result=curl_exec($ch);
curl_close($ch);
return json_decode($result,True);
}
//call the function post_captcha
$res=post_captcha($_POST['g-recaptcha-response']);
if($res['success']){
	echo'<p>please go back and make sure you check the security caotcha box.<p><br>';
}
else {
	echo'<br><p>captcha was completed successfully!</p><br>';
}
?>