<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Carbon\Carbon;



//TO do essential

// Account database
// router uses information table 
// router configuration status table and all the required models

class FivegRouterSettingController extends Controller
{
    public function showRouterSettingPage()
    {
        return view('fivegroutersetting');
    }
    //$id = OUI - product class - serial number

    //used
    public function refreshWifiPower($id)
    {
        $refreshUrl = 'http://1.1.1.2:7557/devices/'.$id.'/tasks?connection_request';
        $requiredData = '{"name": "refreshObject", "objectName": "InternetGatewayDevice.LANDevice.1.WiFi.X_HW_Txpower"}';
        $ch1 = curl_init($refreshUrl);
        curl_setopt($ch1, CURLOPT_POST, true);
        curl_setopt($ch1, CURLOPT_POSTFIELDS, $requiredData);
        curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch1);
        $code = curl_getinfo($ch1)["http_code"];
        curl_close($ch1);
        if($code === 200)
        {
            return true;
        }
        else 
        {
            return false;
        }
    }

    //used
    public function refreshWifiNumbers($id)
    {
        $refreshUrl = 'http://1.1.1.2:7557/devices/'.$id.'/tasks?connection_request';
        $requiredData = '{"name": "refreshObject", "objectName": "InternetGatewayDevice.LANDevice.1.WiFi.RadioNumberOfEntries"}';
        $ch1 = curl_init($refreshUrl);
        curl_setopt($ch1, CURLOPT_POST, true);
        curl_setopt($ch1, CURLOPT_POSTFIELDS, $requiredData);
        curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch1);
        $code = curl_getinfo($ch1)["http_code"];
        curl_close($ch1);
        if($code === 200)
        {
            return true;
        }
        else 
        {
            return false;
        }
    }

    //used
    //yo chaine kura ho 5g ra 2.4 g duitaai ko lagi same for both kind
    public function refreshLANDeviceHost($id)
    {
        $refreshUrl = 'http://1.1.1.2:7557/devices/'.$id.'/tasks?connection_request';
        // $requiredData = '{"name": "refreshObject", "objectName": ""}';
        $requiredData = '{"name": "refreshObject", "objectName": "InternetGatewayDevice.LANDevice.1.Hosts"}';
        $ch1 = curl_init($refreshUrl);
        curl_setopt($ch1, CURLOPT_POST, true);
        curl_setopt($ch1, CURLOPT_POSTFIELDS, $requiredData);
        curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch1);
        $code = curl_getinfo($ch1)["http_code"];
        curl_close($ch1);
        if($code === 200)
        {
            return true;
        }
        else 
        {
            return false;
        }
    }

    // public function refreshWANConfiguration($id)
    // {
    //     $refreshUrl = 'http://1.1.1.2:7557/devices/'.$id.'/tasks?connection_request';
    //     $requiredData = '{"name": "refreshObject", "objectName": "InternetGatewayDevice.LANDevice.1.WLANConfiguration"}';
    //     $ch1 = curl_init($refreshUrl);
    //     curl_setopt($ch1, CURLOPT_POST, true);
    //     curl_setopt($ch1, CURLOPT_POSTFIELDS, $requiredData);
    //     curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
    //     $response = curl_exec($ch1);
    //     $code = curl_getinfo($ch1)["http_code"];
    //     curl_close($ch1);
    //     if($code === 200)
    //     {
    //         return true;
    //     }
    //     else 
    //     {
    //         return false;
    //     }
    // }

    //get routerPower function is completed
    //returns int for Wifi power
    
    // public function getWiFiPower($id)
    // {
    //     if($this->refreshWifiPower($id))
    //     {
    //         $url = 'http://1.1.1.2:7557/devices?query=%7B%22_id%22%3A%22'.$id.'%22%7D&projection=InternetGatewayDevice.LANDevice.1.WiFi.X_HW_Txpower';
    //         $ch = curl_init($url);
    //         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //         $response = curl_exec($ch);
    //         if (curl_errno($ch)) {
    //             die('cURL error: ' . curl_error($ch));
    //         }
    //         curl_close($ch);
    //         $data = json_decode($response, true);
    //         $power = $data[0]['InternetGatewayDevice']['LANDevice'][1]['WiFi']['X_HW_Txpower']['_value'];
    //         return $power;
    //     }
    //     else
    //     {
    //         return false;
    //     }
    // }

    //used
    //returns an array with key valye as supported bands
    public function getSupportedFrequencyBand($id)
    {
        $bands = array();
        if($this->refreshWifiNumbers($id))
        {
            $url = 'http://1.1.1.2:7557/devices?query=%7B%22_id%22%3A%22'.$id.'%22%7D&projection=InternetGatewayDevice.LANDevice.1.WiFi';
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            if (curl_errno($ch)) {
                die('cURL error: ' . curl_error($ch));
            }
            curl_close($ch);
            $data = json_decode($response, true);
            for($i=1;$i<=$data[0]['InternetGatewayDevice']['LANDevice'][1]['WiFi']['RadioNumberOfEntries']['_value'];$i++)
            {
                if($data[0]['InternetGatewayDevice']['LANDevice'][1]['WiFi']['Radio'][$i]['OperatingFrequencyBand']['_value'] === "2.4GHz")
                    $bands[1] = $data[0]['InternetGatewayDevice']['LANDevice'][1]['WiFi']['Radio'][$i]['OperatingFrequencyBand']['_value'];
                if($data[0]['InternetGatewayDevice']['LANDevice'][1]['WiFi']['Radio'][$i]['OperatingFrequencyBand']['_value'] === "5GHz")
                    $bands[5] = $data[0]['InternetGatewayDevice']['LANDevice'][1]['WiFi']['Radio'][$i]['OperatingFrequencyBand']['_value'];
            }
            return $bands;
        }
        else
        {
            return false;
        }
    }

    //used
    public function getIdFromSerial($serial)
    {
        $url = 'http://1.1.1.2:7557/devices?query=%7B%22_deviceId._SerialNumber%22%3A%22'.$serial.'%22%7D&projection=_Id';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            die('cURL error: ' . curl_error($ch));
        }
        curl_close($ch);
        $data = json_decode($response, true);
        return $data[0]['_id'];
    }

    //used
    public function convertLastBoot($data)
    {
        // Assuming you have the client's timezone stored in a variable $clientTimezone
        $clientTimezone = 'Asia/Kathmandu'; // Example timezone

        // Convert the timestamp to the client's timezone
        $timestamp = $data;
        $date = Carbon::createFromFormat('Y-m-d\TH:i:s.u\Z', $timestamp, 'UTC');
        $date->setTimezone($clientTimezone);
        
        // Format the date for display
        $formattedDate = $date->format('Y-m-d H:i:s');


        $duration = (Carbon::now())->diff($formattedDate);

        return $duration;
    }

    // public function getActiveDevices($id)
    // {

    //     $activeDevice = array();
    
    //     $url = 'http://1.1.1.2:7557/devices?query=%7B%22_id%22%3A%22'.$id.'%22%7D&projection=InternetGatewayDevice.LANDevice.1.Hosts.Host.1';
    //     $ch = curl_init($url);
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //     $response = curl_exec($ch);
    //     if (curl_errno($ch)) {
    //         die('cURL error: ' . curl_error($ch));
    //     }
    //     curl_close($ch);
    //     if (empty($response)) {
    //         die('No response received from the URL.');
    //     }
    //     $data = json_decode($response, true);
    //     if ($data === null) {
    //         die('Failed to parse JSON response.');
    //     }
    //     $hosts = $data[0]['InternetGatewayDevice']['LANDevice'][1]['Hosts']['Host'];
    //     foreach($hosts as $host)
    //     {
    //         if($host['Active']['_value'] === true)
    //         {
    //             var_dump($host['HostName']);
    //             array_push($activeDevice, $host['HostName']['_value']);
    //             $activeDevice[] = $host['HostName']['_value'];
    //             print_r($host['HostName']['_value'].$host['IPAddress']['_value'].$host['MACAddress']['_value']);
    //             echo "<br>";
    //         }
    //     }
    //     print_r($activeDevice);
    // }

    // public function getChannel($id)
    // {

    //     $url = 'http://1.1.1.2:7557/devices?query=%7B%22_id%22%3A%22'.$id.'%22%7D&projection=InternetGatewayDevice.LANDevice.1.WLANConfiguration.1.Channel';
    //     $ch = curl_init($url);
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //     $response = curl_exec($ch);
    //     if (curl_errno($ch)) {
    //         die('cURL error: ' . curl_error($ch));
    //     }
    //     curl_close($ch);
    //     if (empty($response)) {
    //         die('No response received from the URL.');
    //     }
    //     $data = json_decode($response, true);
    //     print_r($data[0]['InternetGatewayDevice']['LANDevice'][1]['WLANConfiguration'][1]['ChannelsInUse']['_value']);
    //     exit();
    //     if ($data === null) {
    //         die('Failed to parse JSON response.');
    //     }
        
    // }

    // public function getSSID($id)
    // {
    //     $url = 'http://1.1.1.2:7557/devices?query=%7B%22_id%22%3A%22'.$id.'%22%7D&projection=InternetGatewayDevice.LANDevice.1.WLANConfiguration.1.SSID';
    //     $ch = curl_init($url);
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //     $response = curl_exec($ch);
    //     if (curl_errno($ch)) {
    //         die('cURL error: ' . curl_error($ch));
    //     }
    //     curl_close($ch);
    //     $data = json_decode($response, true);
    //     $SSID = $data[0]['InternetGatewayDevice']['LANDevice'][1]['WLANConfiguration'][1]['SSID']['_value'];
    //     return $SSID;
    // }



    //return array with frequency band and boolean as a key => value pair

    // public function getSSIDAdvertisementEnabled($id)
    // {
    //     $availableFrequencyBands = $this->getSupportedFrequencyBand($id);
    //     $SSIDAdvertisementEnabled = array();
    //     if($availableFrequencyBands)
    //     {
    //         foreach($availableFrequencyBands as $key => $value)
    //         {
    //             $url = 'http://1.1.1.2:7557/devices?query=%7B%22_id%22%3A%22'.$id.'%22%7D&projection=InternetGatewayDevice.LANDevice.1.WLANConfiguration.'.$key.'.SSIDAdvertisementEnabled';
    //             $ch = curl_init($url);
    //             curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //             $response = curl_exec($ch);
    //             if (curl_errno($ch)) {
    //                 die('cURL error: ' . curl_error($ch));
    //             }
    //             curl_close($ch);
    //             $data = json_decode($response, true);
    //             $SSIDAdvertisementEnabled[$key] = $data[0]['InternetGatewayDevice']['LANDevice'][1]['WLANConfiguration'][$key]['SSIDAdvertisementEnabled']['_value'];
    //         }
    //         return $SSIDAdvertisementEnabled;
    //     }
    //     else
    //     {
    //         return false;
    //     }
    // }

    //returns an array as key => value

    // public function getWLANEnable($id)
    // {
    //     $availableFrequencyBands = $this->getSupportedFrequencyBand($id);
    //     $projection = "";
    //     $WLANEnable = array();
    //     if($availableFrequencyBands)
    //     {
    //         foreach($availableFrequencyBands as $key => $value)
    //         {
    //             $projection .= "InternetGatewayDevice.LANDevice.1.WLANConfiguration.".$key.".Enable";
    //             if($value !== end($availableFrequencyBands))
    //             {
    //                 $projection .= ",";
    //             }
    //         }
    //         $url = 'http://1.1.1.2:7557/devices?query=%7B%22_id%22%3A%22'.$id.'%22%7D&projection='.$projection;
    //         $ch = curl_init($url);
    //         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //         $response = curl_exec($ch);
    //         if (curl_errno($ch)) {
    //             die('cURL error: ' . curl_error($ch));
    //         }
    //         curl_close($ch);
    //         $data = json_decode($response, true);
    //         foreach($availableFrequencyBands as $key => $value)
    //         {
    //             $WLANEnable[$key] = $data[0]['InternetGatewayDevice']['LANDevice'][1]['WLANConfiguration'][$key]['Enable']['_value'];
    //         }
    //         return $WLANEnable;
    //     }
    //     else
    //     {
    //         return false;
    //     } 
    // }

    //Helps to recieve all connected CPE ID

    // public function getCPE()
    // {
    //     $url = 'http://1.1.1.2:7557/devices?query=&projection=_id';
    //     $ch = curl_init($url);
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //     $response = curl_exec($ch);
    //     if (curl_errno($ch)) {
    //         die('cURL error: ' . curl_error($ch));
    //     }
    //     curl_close($ch);
    //     if (empty($response)) {
    //         die('No response received from the URL.');
    //     }
    //     $devices = json_decode($response, true);
    //     // print_r($devices);
    //     // exit();
    //     if ($devices === null) {
    //         die('Failed to parse JSON response.');
    //     }
    //     foreach($devices as $device)
    //     {
    //         // print_r($device['_id']);
    //         print_r($device);
    //         echo "<br><br><br><br>";
    //     }
    // }

    // public function getRouterInfo()
    // {
    //     $id = $this->getIdFromSerial(\Auth::user()->router_serial_no);
    //     $info = array();
    //     if($this->refreshLANDeviceHost($id))
    //     {
    //         $url = 'http://1.1.1.2:7557/devices?query=%7B%22_id%22%3A%22'.$id.'%22%7D&projection=InternetGatewayDevice.LANDevice.1.WiFi.X_HW_Txpower,_lastBoot';
    //         $ch = curl_init($url);
    //         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //         $response = curl_exec($ch);
    //         if (curl_errno($ch)) {
    //             die('cURL error: ' . curl_error($ch));
    //         }
    //         curl_close($ch);
    //         $data = json_decode($response, true);

    //         $info["active"] = 'Active';
    //         $info["lastBoot"] = $this->convertLastBoot($data[0]['_lastBoot']);
    //         $info["routerPower"] = $data[0]['InternetGatewayDevice']['LANDevice'][1]['WiFi']['X_HW_Txpower']['_value'];
    //         $data = json_encode($info);
    //         return $data;
    //     }
    //     else
    //     {
    //         $info["active"] = 'Offline';
    //         $info["lastBoot"] = [];
    //         $info["routerPower"] = 'null';
    //         $data = json_encode($info);
    //         return $data;
    //     }
    // }


    public function getRouterSettingInfo()
    {
        $id = $this->getIdFromSerial(\Auth::user()->router_serial_no);
        $availableFrequencyBands = $this->getSupportedFrequencyBand($id);
        $projection = "";
        $info = array();
        $Devices = array();
        if($this->refreshLANDeviceHost($id))
        {
            foreach($availableFrequencyBands as $key => $value)
            {
                $projection .= "InternetGatewayDevice.LANDevice.1.WLANConfiguration.".$key.".SSID,InternetGatewayDevice.LANDevice.1.WLANConfiguration.".$key.".SSIDAdvertisementEnabled,InternetGatewayDevice.LANDevice.1.WLANConfiguration.".$key.".Enable,InternetGatewayDevice.LANDevice.1.WLANConfiguration.".$key.".ChannelsInUse,InternetGatewayDevice.LANDevice.1.WLANConfiguration.".$key.".X_HW_RFBand,InternetGatewayDevice.LANDevice.1.WLANConfiguration.".$key.".PossibleChannels";
                if($value !== end($availableFrequencyBands))
                {
                    $projection .= ",";
                }
            }
            $url = 'http://1.1.1.2:7557/devices?query=%7B%22_id%22%3A%22'.$id.'%22%7D&projection=InternetGatewayDevice.LANDevice.1.WiFi.X_HW_Txpower,_lastBoot,InternetGatewayDevice.LANDevice.1.Hosts,'.$projection;
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            if (curl_errno($ch)) {
                die('cURL error: ' . curl_error($ch));
            }
            curl_close($ch);
            $data = json_decode($response, true);
            $DevicesData = $data[0]['InternetGatewayDevice']['LANDevice'][1]['Hosts'];
            for($i=1; $i<=$DevicesData["HostNumberOfEntries"]['_value']; $i++)
            {
                if($DevicesData['Host'][$i])
                {
                    $Devices[] = $DevicesData['Host'][$i];
                }
            }
            usort($Devices, function($a, $b) {
                return $b['Active']['_value'] <=> $a['Active']['_value'];
            });
            usort($Devices, function($a, $b) {
                if($a['Active']['_value'] & $b['Active']['_value'])
                    return $b['X_HW_RSSI']['_value'] <=> $a['X_HW_RSSI']['_value'];
            });
            $info["active"] = 'Active';
            $info["lastBoot"] = $this->convertLastBoot($data[0]['_lastBoot']);
            $info["routerPower"] = $data[0]['InternetGatewayDevice']['LANDevice'][1]['WiFi']['X_HW_Txpower']['_value'];
            $info["Devices"] = $Devices;
            foreach($availableFrequencyBands as $key => $value)
            {
                $info['noOfWifi'][$key] = $data[0]['InternetGatewayDevice']['LANDevice'][1]['WLANConfiguration'][$key];
            }
            $data = json_encode($info);
            return $data;
        }
        else
        {
            $info["active"] = 'Offline';
            $info["lastBoot"] = [];
            $info["routerPower"] = 'null';
            $info["Devices"] = [];
            $info["noOfWifi"][] = [];
            $data = json_encode($info);
            return $data;
        }
    }
    
    
    public function getActiveUsersRouter()
    {
        $apiUrl = 'http://1.1.1.2:7557/devices?query=&projection=InternetGatewayDevice.LANDevice';
        // Initialize cURL session
        $ch = curl_init($apiUrl);
        
        // Execute cURL session and fetch the response
        $response = curl_exec($ch);
        
        // Check for cURL errors
        if (curl_errno($ch)) {
            die('cURL error: ' . curl_error($ch));
        }
        
        // Close cURL session
        curl_close($ch);
        print_r($response);
        exit();
        // Decode the JSON response
        $data = json_decode($response, true);
        
        // Check if the response was successfully decoded
        if ($data === null) {
            die('Failed to parse JSON response.');
        }

        // Extract the list of active devices
        $activeDevices = $data['result'];
        
        // Print or use the list of active devices
        print_r($activeDevices);
    }


    public function rebootRouter()
    {
        $id = $this->getIdFromSerial(\Auth::user()->router_serial_no);
        if($this->refreshWifiPower($id))
        {

            $rebootUrl = 'http://1.1.1.2:7557/devices/'.$id.'/tasks?connection_request';
            $requiredData = '{"name": "reboot"}';
            $ch1 = curl_init($rebootUrl);
            curl_setopt($ch1, CURLOPT_POST, true);
            curl_setopt($ch1, CURLOPT_POSTFIELDS, $requiredData);
            curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch1);
            $code = curl_getinfo($ch1)["http_code"];
            curl_close($ch1);
            if($code === 200)
            {
                return redirect()->back()->with('success', "Successfully Rebooted your router")->with('info', "Your Router will be Active within few Minutes");
            }
            else 
            {
                return redirect()->back()->with('failed', "Failed to Reboot your router");
            }
        }
        else
        {
            return redirect()->back()->with('failed', "Router is currently offline");
        }

    }
    
    public function routerSetting(Request $request)
    {
        $id = $this->getIdFromSerial(\Auth::user()->router_serial_no);
        // dd($request);
        $SSID1 = $request['SSID2_4GHz'];
        $SSID5 = $request['SSID5GHz'];
        $newPassPhrase1 = $request['newPassword2_4GHz'];
        $newPassPhrase5 = $request['newPassword5GHz'];
        $hideSSID1 = $request['SSIDAdvertisementEnabled2_4GHz'];
        $hideSSID5 = $request['SSIDAdvertisementEnabled5GHz'];
        $WLANEnable1 = $request['WLANEnable2_4GHz'];
        $WLANEnable5 = $request['WLANEnable5GHz'];
        // dd($WLANEnable5);
        $parameterValues = array();
        if($newPassPhrase1)
            $parameterValues[] = ["InternetGatewayDevice.LANDevice.1.WLANConfiguration.1.PreSharedKey.1.PreSharedKey", $newPassPhrase1, "xsd:string"];
        if($SSID1)
            $parameterValues[] = ["InternetGatewayDevice.LANDevice.1.WLANConfiguration.1.SSID", $SSID1, "xsd:string"];
        if($hideSSID1 === 'on')
            $parameterValues[] = ["InternetGatewayDevice.LANDevice.1.WLANConfiguration.1.SSIDAdvertisementEnabled", false, "xsd:boolean" ];
        else
            $parameterValues[] = ["InternetGatewayDevice.LANDevice.1.WLANConfiguration.1.SSIDAdvertisementEnabled", true, "xsd:boolean" ];
        if($WLANEnable1 === 'on')
            $parameterValues[] = ["InternetGatewayDevice.LANDevice.1.WLANConfiguration.1.Enable", true, "xsd:boolean" ];
        else
            $parameterValues[] = ["InternetGatewayDevice.LANDevice.1.WLANConfiguration.1.Enable", false, "xsd:boolean" ];

        if($newPassPhrase5)
            $parameterValues[] = ["InternetGatewayDevice.LANDevice.1.WLANConfiguration.5.PreSharedKey.1.PreSharedKey", $newPassPhrase5, "xsd:string"];
        if($SSID5)
            $parameterValues[] = ["InternetGatewayDevice.LANDevice.1.WLANConfiguration.5.SSID", $SSID5, "xsd:string"];
        if($hideSSID5 === 'on')
            $parameterValues[] = ["InternetGatewayDevice.LANDevice.1.WLANConfiguration.5.SSIDAdvertisementEnabled", false, "xsd:boolean" ];
        else
            $parameterValues[] = ["InternetGatewayDevice.LANDevice.1.WLANConfiguration.5.SSIDAdvertisementEnabled", true, "xsd:boolean" ];
        if($WLANEnable5 === 'on')
            $parameterValues[] = ["InternetGatewayDevice.LANDevice.1.WLANConfiguration.5.Enable", true, "xsd:boolean" ];
        else
            $parameterValues[] = ["InternetGatewayDevice.LANDevice.1.WLANConfiguration.5.Enable", false, "xsd:boolean" ];
        // dd($parameterValues);
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            ])->post('http://1.1.1.2:7557/devices/'.$id.'/tasks?connection_request', [
                "name" => "setParameterValues",
                "parameterValues" => $parameterValues
            ]);
        if($response)
        {
            return redirect('5g')->with('success', "Setting Saved");
        }
    }
}
