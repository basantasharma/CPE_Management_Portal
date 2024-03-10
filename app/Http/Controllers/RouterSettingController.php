<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Carbon\Carbon;



//TO do essential

// Account database
// router uses information table 
// router configuration status table and all the required models

class RouterSettingController extends Controller
{
    public function showRouterSettingPage()
    {
        return view('routersetting');
    }
    //$id = OUI - product class - serial number
    // public function refreshHost($id = '00259E-EG8141A5-48575443F6E9A3A4')
    // {
    //     $refreshUrl = 'http://1.1.1.2:7557/devices/'.$id.'/tasks?connection_request';
    //     $requiredData = '{"name": "refreshObject", "objectName": "InternetGatewayDevice.LANDevice.1.Hosts.Host"}';
    //     $ch1 = curl_init($refreshUrl);
    //     curl_setopt($ch1, CURLOPT_POST, true);
    //     curl_setopt($ch1, CURLOPT_POSTFIELDS, $requiredData);
    //     curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
    //     $response1 = curl_exec($ch1);
    //     curl_close($ch1);
    //     if($response1)
    //     {
    //         return $response1;
    //     }
    //     else 
    //     {
    //         return false;
    //     }
    // }
    public function refreshLANDeviceHost($id = '00259E-EG8141A5-48575443F6E9A3A4')
    {
        $refreshUrl = 'http://1.1.1.2:7557/devices/'.$id.'/tasks?connection_request';
        // $requiredData = '{"name": "refreshObject", "objectName": ""}';
        $requiredData = '{"name": "refreshObject", "objectName": "InternetGatewayDevice.LANDevice.1.Hosts"}';
        $ch1 = curl_init($refreshUrl);
        curl_setopt($ch1, CURLOPT_POST, true);
        curl_setopt($ch1, CURLOPT_POSTFIELDS, $requiredData);
        curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
        $response1 = curl_exec($ch1);
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
    public function refreshWAN($id = '00259E-EG8141A5-48575443F6E9A3A4')
    {
        $refreshUrl = 'http://1.1.1.2:7557/devices/'.$id.'/tasks?connection_request';
        $requiredData = '{"name": "refreshObject", "objectName": "InternetGatewayDevice.LANDevice.1.WLANConfiguration"}';
        $ch1 = curl_init($refreshUrl);
        curl_setopt($ch1, CURLOPT_POST, true);
        curl_setopt($ch1, CURLOPT_POSTFIELDS, $requiredData);
        curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
        $response1 = curl_exec($ch1);
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
    public function refreshRouterPower($id = '00259E-EG8141A5-48575443F6E9A3A4')
    {
        $refreshUrl = 'http://1.1.1.2:7557/devices/'.$id.'/tasks?connection_request';
        $requiredData = '{"name": "refreshObject", "objectName": "InternetGatewayDevice.LANDevice.1.WLANConfiguration.1.X_HW_PowerValue"}';
        $ch1 = curl_init($refreshUrl);
        curl_setopt($ch1, CURLOPT_POST, true);
        curl_setopt($ch1, CURLOPT_POSTFIELDS, $requiredData);
        curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
        // curl_setopt($ch1, CURLOPT_HEADER, true);
        $response1 = curl_exec($ch1);
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
    //get routerPower function is completed
    //returns integer 
    public function getRouterPower($id = '00259E-EG8141A5-48575443F6E9A3A4')
    {
        $url = 'http://1.1.1.2:7557/devices?query=%7B%22_id%22%3A%22'.$id.'%22%7D&projection=InternetGatewayDevice.LANDevice.1.WLANConfiguration.1.X_HW_PowerValue';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            die('cURL error: ' . curl_error($ch));
        }
        curl_close($ch);
        $data = json_decode($response, true);
        $power = $data[0]['InternetGatewayDevice']['LANDevice'][1]['WLANConfiguration'][1]['X_HW_PowerValue']['_value'];
        return $power;
    }


    public function getSupportedFrequencyBand($id = '00259E-EG8141A5-48575443F6E9A3A4')
    {
        $bands = array();
        $url = 'http://1.1.1.2:7557/devices?query=%7B%22_id%22%3A%22'.$id.'%22%7D&projection=InternetGatewayDevice.LANDevice.1.WiFi.Radio.1.SupportedFrequencyBands';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            die('cURL error: ' . curl_error($ch));
        }
        curl_close($ch);
        $data = json_decode($response, true);

        // var_dump($data[0]['InternetGatewayDevice']['LANDevice'][1]['WiFi']['Radio'][1]['SupportedFrequencyBands']['_value']);

        // return $data;
        return $data[0]['InternetGatewayDevice']['LANDevice'][1]['WiFi']['Radio'][1]['SupportedFrequencyBands']['_value'];
    }
    public function convertLastBoot($data)
    {
        // $url = 'http://1.1.1.2:7557/devices?query=%7B%22_id%22%3A%22'.$id.'%22%7D&projection=_lastBoot';
        // $ch = curl_init($url);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // $response = curl_exec($ch);
        // if (curl_errno($ch)) {
        //     die('cURL error: ' . curl_error($ch));
        // }
        // curl_close($ch);
        // $data = json_decode($response, true);
        
        
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

    public function getActiveDevices()
    {
        $deviceId = '00259E-EG8141A5-48575443F6E9A3A4';

        $activeDevice = array();
    
        $url = 'http://1.1.1.2:7557/devices?query=%7B%22_id%22%3A%22'.$deviceId.'%22%7D&projection=InternetGatewayDevice.LANDevice.1.Hosts.Host.1';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            die('cURL error: ' . curl_error($ch));
        }
        curl_close($ch);
        if (empty($response)) {
            die('No response received from the URL.');
        }
        $data = json_decode($response, true);
        if ($data === null) {
            die('Failed to parse JSON response.');
        }
        $hosts = $data[0]['InternetGatewayDevice']['LANDevice'][1]['Hosts']['Host'];
        // var_dump($data[0]['InternetGatewayDevice']['LANDevice'][1]['Hosts']['Host'][1]['Active']['_value']);
        foreach($hosts as $host)
        {
            if($host['Active']['_value'] === true)
            {
                var_dump($host['HostName']);
                array_push($activeDevice, $host['HostName']['_value']);
                $activeDevice[] = $host['HostName']['_value'];
                print_r($host['HostName']['_value'].$host['IPAddress']['_value'].$host['MACAddress']['_value']);
                echo "<br>";
            }
        }
        print_r($activeDevice);
    }

    public function getChannel()
    {
        $deviceId = '00259E-EG8141A5-48575443F6E9A3A4';

        $url = 'http://1.1.1.2:7557/devices?query=%7B%22_id%22%3A%22'.$deviceId.'%22%7D&projection=InternetGatewayDevice.LANDevice.1.WLANConfiguration.1.Channel';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            die('cURL error: ' . curl_error($ch));
        }
        curl_close($ch);
        if (empty($response)) {
            die('No response received from the URL.');
        }
        $data = json_decode($response, true);
        print_r($data[0]['InternetGatewayDevice']['LANDevice'][1]['WLANConfiguration'][1]['ChannelsInUse']['_value']);
        exit();
        if ($data === null) {
            die('Failed to parse JSON response.');
        }

        
    }
    public function getSSID($id = '00259E-EG8141A5-48575443F6E9A3A4')
    {
        $url = 'http://1.1.1.2:7557/devices?query=%7B%22_id%22%3A%22'.$id.'%22%7D&projection=InternetGatewayDevice.LANDevice.1.WLANConfiguration.1.SSID';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            die('cURL error: ' . curl_error($ch));
        }
        curl_close($ch);
        $data = json_decode($response, true);
        $SSID = $data[0]['InternetGatewayDevice']['LANDevice'][1]['WLANConfiguration'][1]['SSID']['_value'];
        return $SSID;
    }
    public function getSSIDAdvertisementEnabled($id = '00259E-EG8141A5-48575443F6E9A3A4')
    {
        $url = 'http://1.1.1.2:7557/devices?query=%7B%22_id%22%3A%22'.$id.'%22%7D&projection=InternetGatewayDevice.LANDevice.1.WLANConfiguration.1.SSIDAdvertisementEnabled';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            die('cURL error: ' . curl_error($ch));
        }
        curl_close($ch);
        $data = json_decode($response, true);
        $SSIDAdvertisementEnabled = $data[0]['InternetGatewayDevice']['LANDevice'][1]['WLANConfiguration'][1]['SSIDAdvertisementEnabled']['_value'];
        return $SSIDAdvertisementEnabled;
    }
    public function getWLANEnable($id = '00259E-EG8141A5-48575443F6E9A3A4')
    {
        $url = 'http://1.1.1.2:7557/devices?query=%7B%22_id%22%3A%22'.$id.'%22%7D&projection=InternetGatewayDevice.LANDevice.1.WLANConfiguration.1.Enable';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            die('cURL error: ' . curl_error($ch));
        }
        curl_close($ch);
        $data = json_decode($response, true);
        $WLANEnable = $data[0]['InternetGatewayDevice']['LANDevice'][1]['WLANConfiguration'][1]['Enable']['_value'];
        return $WLANEnable;
    }

    public function getCPE()
    {
        $url = 'http://1.1.1.2:7557/devices?query=&projection=Status';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            die('cURL error: ' . curl_error($ch));
        }
        curl_close($ch);
        if (empty($response)) {
            die('No response received from the URL.');
        }
        $devices = json_decode($response, true);
        // print_r($devices);
        // exit();
        if ($devices === null) {
            die('Failed to parse JSON response.');
        }
        foreach($devices as $device)
        {
            // print_r($device['_id']);
            print_r($device);
            echo "<br><br><br><br>";

        }


    }

    public function getRouterInfo($id = '00259E-EG8141A5-48575443F6E9A3A4')
    {
        $info = array();

        if($this->refreshRouterPower($id))
        {
            $url = 'http://1.1.1.2:7557/devices?query=%7B%22_id%22%3A%22'.$id.'%22%7D&projection=InternetGatewayDevice.LANDevice.1.WLANConfiguration.1.X_HW_PowerValue,_lastBoot';
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            if (curl_errno($ch)) {
                die('cURL error: ' . curl_error($ch));
            }
            curl_close($ch);
            $data = json_decode($response, true);

            $info["active"] = 'Active';
            $info["lastBoot"] = $this->convertLastBoot($data[0]['_lastBoot']);
            $info["routerPower"] = $data[0]['InternetGatewayDevice']['LANDevice'][1]['WLANConfiguration'][1]['X_HW_PowerValue']['_value'];
            // $info["SSID"] = $this->getSSID($id);
            $data = json_encode($info);
            return $data;
        }
        else
        {
            $info["active"] = 'Offline';
            $info["lastBoot"] = [];
            // $info["lastBoot"] = $this->convertLastBoot(Carbon::now('Asia/Kathmandu')->format('Y-m-d\TH:i:s.u\Z'));
            $info["routerPower"] = 'null';
            $data = json_encode($info);
            return $data;
        }
    }
    public function getRouterSettingInfo($id = '00259E-EG8141A5-48575443F6E9A3A4')
    {
        $info = array();
        $Devices = array();
        if($this->refreshLANDeviceHost($id))
        {
            $url = 'http://1.1.1.2:7557/devices?query=%7B%22_id%22%3A%22'.$id.'%22%7D&projection=InternetGatewayDevice.LANDevice.1.WLANConfiguration.1.SSID,InternetGatewayDevice.LANDevice.1.WLANConfiguration.1.SSIDAdvertisementEnabled,InternetGatewayDevice.LANDevice.1.WLANConfiguration.1.Enable,InternetGatewayDevice.LANDevice.1.Hosts';
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
            $info["SSID"] = $data[0]['InternetGatewayDevice']['LANDevice'][1]['WLANConfiguration'][1]['SSID']['_value'];
            $info["SSIDAdvertisementEnabled"] = $data[0]['InternetGatewayDevice']['LANDevice'][1]['WLANConfiguration'][1]['SSIDAdvertisementEnabled']['_value'];
            $info["WLANEnable"] = $data[0]['InternetGatewayDevice']['LANDevice'][1]['WLANConfiguration'][1]['Enable']['_value'];
            $info["Devices"] = $Devices;
            $data = json_encode($info);
            return $data;
        }
        else
        {
            $info["SSID"] = 'Null';
            $info["SSIDAdvertisementEnabled"] = true;
            $info["WLANEnable"] = true;
            $info["Devices"] = [];
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

    
    public function routerSetting(Request $request)
    {
        $id = '00259E-EG8141A5-48575443F6E9A3A4';
        $SSID = $request['SSID'];
        $newPassPhrase = $request['newPassPhrase'];
        $hideSSID = $request['SSIDAdvertisementEnabled'];
        $WLANEnable = $request['WLANEnable'];
        $parameterValues = array();
        if($newPassPhrase)
            $parameterValues[] = ["InternetGatewayDevice.LANDevice.1.WLANConfiguration.1.PreSharedKey.1.PreSharedKey", $newPassPhrase, "xsd:string"];
        if($SSID)
            $parameterValues[] = ["InternetGatewayDevice.LANDevice.1.WLANConfiguration.1.SSID", $SSID, "xsd:string"];
        if($hideSSID === 'on')
            $parameterValues[] = ["InternetGatewayDevice.LANDevice.1.WLANConfiguration.1.SSIDAdvertisementEnabled", false, "xsd:boolean" ];
        else
            $parameterValues[] = ["InternetGatewayDevice.LANDevice.1.WLANConfiguration.1.SSIDAdvertisementEnabled", true, "xsd:boolean" ];
        if($WLANEnable === 'on')
            $parameterValues[] = ["InternetGatewayDevice.LANDevice.1.WLANConfiguration.1.Enable", true, "xsd:boolean" ];
        else
            $parameterValues[] = ["InternetGatewayDevice.LANDevice.1.WLANConfiguration.1.Enable", false, "xsd:boolean" ];
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            ])->post('http://1.1.1.2:7557/devices/'.$id.'/tasks?connection_request', [
                "name" => "setParameterValues",
                "parameterValues" => $parameterValues
            ]);
        if($response)
        {
            return redirect('router')->with('success', "Setting Saved");
        }
    }
}
