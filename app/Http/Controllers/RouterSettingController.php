<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouterSettingController extends Controller
{
    public function showRouterSettingPage()
    {
        return view('routersetting');
    }

    public function refreshHost($id = '00259E-EG8141A5-48575443F6E9A3A4')
    {
        $refreshUrl = 'http://192.168.1.4:7557/devices/'.$id.'/tasks?connection_request';
        $requiredData = '{"name": "refreshObject", "objectName": "InternetGatewayDevice.LANDevice.1.Hosts.Host"}';
        $ch1 = curl_init($refreshUrl);
        curl_setopt($ch1, CURLOPT_POST, true);
        curl_setopt($ch1, CURLOPT_POSTFIELDS, $requiredData);
        curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
        $response1 = curl_exec($ch1);
        curl_close($ch1);
        if($response1)
        {
            return $response1;
        }
        else 
        {
            return false;
        }
    }

    public function modifySSID($id = '00259E-EG8141A5-48575443F6E9A3A4', $SSID="AstavisionInfosys")
    {
        $url = 'http://192.168.1.4:7557/devices/'.$id.'/tasks?connection_request';
        $requiredData = '{"name": "setParameterValues", "parameterValue": "[["InternetGatewayDevice.LANDevice.1.WANConfiguration.1.SSID", "'.$SSID.'", "xsd:string"]]"}';
        $ch1 = curl_init($url);
        curl_setopt($ch1, CURLOPT_POST, true);
        curl_setopt($ch1, CURLOPT_POSTFIELDS, $requiredData);
        curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
        $response1 = curl_exec($ch1);
        curl_close($ch1);
        if($response1)
        {
            return $response1;
        }
        else 
        {
            return false;
        }
    }

    public function modifyPassword($id = '00259E-EG8141A5-48575443F6E9A3A4', $password="12345678")
    {
        $url = 'http://192.168.1.4:7557/devices/'.$id.'/tasks?connection_request';
        $requiredData = '{"name": "setParameterValues", "parameterValue": "[["InternetGatewayDevice.LANDevice.1.WANConfiguration.1.PreSharedKey.1.PreSharedKey", "'.$password.'", "xsd:string"]]"}';
        $ch1 = curl_init($url);
        curl_setopt($ch1, CURLOPT_POST, true);
        curl_setopt($ch1, CURLOPT_POSTFIELDS, $requiredData);
        curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
        $response1 = curl_exec($ch1);
        curl_close($ch1);
        if($response1)
        {
            return $response1;
        }
        else 
        {
            return false;
        }
    }

    public function modifyChannel($id = '00259E-EG8141A5-48575443F6E9A3A4', $channel=7)
    {
        $url = 'http://192.168.1.4:7557/devices/'.$id.'/tasks?connection_request';
        $requiredData = '{"name": "setParameterValues", "parameterValue": "[["InternetGatewayDevice.LANDevice.1.WANConfiguration.1.Channel", "'.$channel.'"]]"}';
        $ch1 = curl_init($url);
        curl_setopt($ch1, CURLOPT_POST, true);
        curl_setopt($ch1, CURLOPT_POSTFIELDS, $requiredData);
        curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
        $response1 = curl_exec($ch1);
        curl_close($ch1);
        if($response1)
        {
            return $response1;
        }
        else 
        {
            return false;
        }
    }

    public function hideUnhideSSID($id = '00259E-EG8141A5-48575443F6E9A3A4', $value = true)
    {
        $url = 'http://192.168.1.4:7557/devices/'.$id.'/tasks?connection_request';
        $requiredData = '{"name": "setParameterValues", "parameterValue": "[["InternetGatewayDevice.LANDevice.1.WANConfiguration.1.SSIDAdvertisementEnabled", "'.$value.'"]]"}';
        $ch1 = curl_init($url);
        curl_setopt($ch1, CURLOPT_POST, true);
        curl_setopt($ch1, CURLOPT_POSTFIELDS, $requiredData);
        curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
        $response1 = curl_exec($ch1);
        curl_close($ch1);
        if($response1)
        {
            return $response1;
        }
        else 
        {
            return false;
        }
    }    

    public function getActiveDevices()
    {
        $deviceId = '00259E-EG8141A5-48575443F6E9A3A4';
        refreshHost($deviceId);
        // if(refreshHost())
        // {

            $activeDevice = array();
        
            $url = 'http://192.168.1.4:7557/devices?query=%7B%22_id%22%3A%22'.$deviceId.'%22%7D&projection=InternetGatewayDevice.LANDevice.1.Hosts.Host';
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
            foreach($hosts as $host)
            {
                if($host['Active']['_value'] === true)
                {
                    // array_push($activeDevice, $host['HostName']['_value']);
                    $activeDevice[] = $host['HostName']['_value'];
                    // print_r($host['HostName']['_value'].$host['IPAddress']['_value'].$host['MACAddress']['_value']);
                    // echo "<br>";
                }
            }
            print_r($activeDevice);
            // echo "<br>"
            // }
    }

    public function getChannel()
    {
        $deviceId = '00259E-EG8141A5-48575443F6E9A3A4';

        $url = 'http://192.168.1.4:7557/devices?query=%7B%22_id%22%3A%22'.$deviceId.'%22%7D&projection=InternetGatewayDevice.LANDevice';
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

    public function getCPE()
    {
        $url = 'http://192.168.1.4:7557/devices?query=&projection=Status';
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



    public function getActiveUsersRouter()
    {
        $apiUrl = 'http://192.168.1.4:7557/devices?query=&projection=InternetGatewayDevice.LANDevice';
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
    // getActiveUsersRouter();
                                        //  getActiveDevices();
    // getCPE();
}
