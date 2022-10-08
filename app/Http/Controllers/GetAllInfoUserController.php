<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetAllInfoUserController extends Controller
{        
    function getUserIpAddr(){
        if(!empty($_SERVER['HTTP_CLIENT_IP'])){
            //ip from share internet
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
            //ip pass from proxy
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }else{
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }


    function getOS() { 
        //global $user_agent;
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        $os_platform  = "Unknown OS Platform";
        $os_array     = array(
                            '/windows nt 10/i'      =>  'Windows 10',
                            '/windows nt 6.3/i'     =>  'Windows 8.1',
                            '/windows nt 6.2/i'     =>  'Windows 8',
                            '/windows nt 6.1/i'     =>  'Windows 7',
                            '/windows nt 6.0/i'     =>  'Windows Vista',
                            '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                            '/windows nt 5.1/i'     =>  'Windows XP',
                            '/windows xp/i'         =>  'Windows XP',
                            '/windows nt 5.0/i'     =>  'Windows 2000',
                            '/windows me/i'         =>  'Windows ME',
                            '/win98/i'              =>  'Windows 98',
                            '/win95/i'              =>  'Windows 95',
                            '/win16/i'              =>  'Windows 3.11',
                            '/macintosh|mac os x/i' =>  'Mac OS X',
                            '/mac_powerpc/i'        =>  'Mac OS 9',
                            '/linux/i'              =>  'Linux',
                            '/ubuntu/i'             =>  'Ubuntu',
                            '/iphone/i'             =>  'iPhone',
                            '/ipod/i'               =>  'iPod',
                            '/ipad/i'               =>  'iPad',
                            '/android/i'            =>  'Android',
                            '/blackberry/i'         =>  'BlackBerry',
                            '/webos/i'              =>  'Mobile'
                        );

        foreach ($os_array as $regex => $value)
            if (preg_match($regex, $user_agent))
                $os_platform = $value;

        return $os_platform;
    }

    function getBrowser() {
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        //global $user_agent;
        $browser        = "Unknown Browser";
        $browser_array = array(
                                '/msie/i'      => 'Internet Explorer',
                                '/firefox/i'   => 'Firefox',
                                '/safari/i'    => 'Safari',
                                '/chrome/i'    => 'Chrome',
                                '/edge/i'      => 'Edge',
                                '/opera/i'     => 'Opera',
                                '/netscape/i'  => 'Netscape',
                                '/maxthon/i'   => 'Maxthon',
                                '/konqueror/i' => 'Konqueror',
                                '/mobile/i'    => 'Handheld Browser'
                         );
    
        foreach ($browser_array as $regex => $value)
            if (preg_match($regex, $user_agent))
                $browser = $value;
    
        return $browser;
    }

    function getUserInfo(){
        $PublicIP = $this->getUserIpAddr();
        $details  = file_get_contents("http://ipwhois.app/json/" . $PublicIP);
        //print("http://ipwhois.app/json/" . $ip);
        $details  = json_decode($details, true);
        $success  = $details['success'];
    
        if ($success==true) {
            echo $country   = $details['country'] . "<br>";
            echo $city      = $details['city'] . "<br>";
            echo $region    = $details['region'] . "<br>";
            echo $isp       = $details['isp'] . "<br>";
            echo $timezone  = $details['timezone'] . "<br>";
            echo $latitude  = $details['latitude'] . "<br>";
            echo $longitude = $details['longitude'] . "<br>";
        }elseif($success==false){
            echo "localhost";
        }
    }

    function allFunction(){
        echo $this->getUserIpAddr() . "<br>";
        echo $this->getOS() . "<br>";
        echo $this->getBrowser() . "<br>";
        echo $this->getUserInfo() . "<br>";
    }

        
}

