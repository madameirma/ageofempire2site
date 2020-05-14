<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UnitsController extends Controller
{
    public function unitsApi() {

    	$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "http://age-of-empires-2-api.herokuapp.com/api/v1/units",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_POSTFIELDS => "",
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  echo "cURL Error :" . $err;
		} else {
		  //echo $response;
		}

		$unitsRaw = json_decode($response);

		$unitsInfos = $unitsRaw->units;

		return view('units', compact('unitsInfos'));
		
    }

    public function uniqueUnitApi($id1, $id2) {

    	//First unit
    	$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "http://age-of-empires-2-api.herokuapp.com/api/v1/unit/".$id1,
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_POSTFIELDS => "",
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
		  //echo $response;
		}

		$uniqueUnit1 = json_decode($response);

		$cost1 = $uniqueUnit1->cost;

		if ($uniqueUnit1->name === 'Villager') {
			$alea = rand(0, 2);
			if($alea > 1) {
				$image1 = 'img/icons/units/villager_female.jpg';
			} else {
				$image1 = 'img/icons/units/villager_male.jpg';
			}
		} else if ((strpos($uniqueUnit1->name, 'Elite') !== false) && (strpos($uniqueUnit1->name, 'Skirmisher') === false) && (strpos($uniqueUnit1->name, 'Eagle Warrior') === false )) {
			$newName = str_replace('Elite', '', $uniqueUnit1->name);
			$image1 = 'img/icons/units/'.Str::snake($newName).'.jpg';
		} else {
			$image1 = 'img/icons/units/'.Str::snake($uniqueUnit1->name).'.jpg';
		}

		//Second unit

    	$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "http://age-of-empires-2-api.herokuapp.com/api/v1/unit/".$id2,
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_POSTFIELDS => "",
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
		  //echo $response;
		}

		$uniqueUnit2 = json_decode($response);

		if ($uniqueUnit2->name === 'Villager') {
			$alea = rand(0, 2);
			if($alea > 1) {
				$image2 = 'img/icons/units/villager_female.jpg';
			} else {
				$image2 = 'img/icons/units/villager_male.jpg';
			}
		} else if ((strpos($uniqueUnit2->name, 'Elite') !== false) && (strpos($uniqueUnit2->name, 'Skirmisher') === false) && (strpos($uniqueUnit2->name, 'Eagle Warrior') === false )) {
			$newName = str_replace('Elite', '', $uniqueUnit2->name);
			$image2 = 'img/icons/units/'.Str::snake($newName).'.jpg';
		} else {
			$image2 = 'img/icons/units/'.Str::snake($uniqueUnit2->name).'.jpg';
		}

		$cost2 = $uniqueUnit2->cost;

		return view('comparator', compact('uniqueUnit1', 'cost1', 'image1', 'uniqueUnit2', 'cost2', 'image2'));

    }
}
