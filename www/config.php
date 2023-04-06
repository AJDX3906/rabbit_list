<?php
     $config=array(
        'username' => 'admin',
        'password' => 'admin',
        'fofa_key' =>'',
        'fofa_email' =>'',
        'xbook_key' =>'',
        'github_api' =>'',
        'aiqicha_cookie' => '',
        'gaode_apikey' => '',
    );
    
function getconfig($type,$config)
{
    foreach($config as $keyname => $key)
    {
        if($type==$keyname)
        {
            return $key;
        }
    }
    return null;
}
function access_by_cookie($config,$COOKIE)
{
if(getconfig('username',$config)==$COOKIE['username'])
{
    if(getconfig('password',$config)==$COOKIE['password'])
    {
            return 1;
    }
}
setcookie('username','');
setcookie('password','');
header("Location: /login.html");
exit;
}


?>