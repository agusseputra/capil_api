<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Bri extends CI_Controller
{
    function __construct()
    {
    }
    function briva($cust=null){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://penerimaan.undiksha.ac.id/cronjob/get_briva/".$cust);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        $response = curl_exec($ch);
        curl_close($ch);
        $briva = json_decode($response,true);
        foreach ($briva as $val) {
                $val['expiredDate']='2019-07-13 00:59:00';
                $response=$this->create_briva_live($val);
                $result = json_decode($response);
                echo "<pre>";
        		print_r($result);
        		echo "</pre>";
            }
    }
    
    private function get_token()
    {
        $data = null;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.bri.co.id/v1/api/token");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        $param = array(
            'grant_type' => 'authorization_code',
            'client_id' => '7be6f8b003f0025c2d6d01298d4f9a568fbe',
            'client_secret' => '895855bccd1a7d724c9f8eb6314e107d4238',
            'code' => 'a5541970414caddb66a532e46bfa53ca6ce6ce2a');
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($param));
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("X-BRI-KEY:ffe02ec9dc54ab38b36d8b0a8c7dc2575781844d"));
        $response = curl_exec($ch);
        if (!curl_exec($ch))
        {
            die("Error CRUL Code: " . curl_error($ch));
            exit();
        }
        curl_close($ch);
        if (isset($response) && $response != null)
        {
            $data = json_decode($response);
        }
        return $data;
    }
    private function create_briva_live($data)
    {
        $token = $this->get_token();
        $token = $token->data->access_token;
        $post_briva = array(
            "institutionCode" => $data['institutionCode'],
            "brivaNo" => $data['brivaNo'],
            "custCode" => $data['custCode'],
            "nama" => $data['nama'],
            "amount" => $data['amount'],
            "keterangan" => $data['keterangan'],
            "expiredDate" => $data['expiredDate']);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.bri.co.id/v1/api/briva");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_briva);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Authorization: Bearer " . $token,
                "X-BRI-KEY: ffe02ec9dc54ab38b36d8b0a8c7dc2575781844d"));
        $response = curl_exec($ch);
        curl_close($ch);
        if (isset($response) && $response != null)
        {
            $result = json_decode($response);
            //echo "<pre>";
      	//	print_r($result);
      		//echo "</pre>";exit();
            if ($result->responseCode == '00')
            {
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, "https://penerimaan.undiksha.ac.id/cronjob/update_temp_briva/".md5($data['custCode']).'/1');
                //curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                //curl_setopt($ch, CURLOPT_HEADER, FALSE);
                //curl_setopt($ch, CURLOPT_POST, TRUE);
                //curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
                //curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
                curl_exec($ch);
                curl_close($ch);
            }
            if ($result->responseCode != '00' && $result->status == false)
            {
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, "https://penerimaan.undiksha.ac.id/cronjob/update_temp_briva/".md5($data['custCode']).'/2');
                //curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                //curl_setopt($ch, CURLOPT_HEADER, FALSE);
                //curl_setopt($ch, CURLOPT_POST, TRUE);
                //curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
                //curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
                curl_exec($ch);
                curl_close($ch);
            }
        }
        return $response;
    }
	
function test(){
	echo 'test123';
}

}

?>