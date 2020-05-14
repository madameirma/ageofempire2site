<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\civilizations;

class CivsController extends Controller
{



    public function civApi() {

    	$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "http://age-of-empires-2-api.herokuapp.com/api/v1/civilizations",
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
		  echo "Error :" . $err;
		} else {
		  // echo $response;
		}

		$civsRaw = json_decode($response);

		$civsInfos = $civsRaw->civilizations;

		//ID Name Type
		foreach ($civsInfos as $key => $civ) {
			$id[$key] = $civsInfos[$key]->id;
			$names[$key] = $civsInfos[$key]->name;
			$types[$key] = $civsInfos[$key]->army_type;
			$flags[$key] = 'img/nation/'.Str::slug($civsInfos[$key]->name, '-').'.png';
		}
		
		return view('civs', compact('civsInfos', 'names', 'id', 'types', 'flags'));

    }

    public function idCivs($name) {

    	$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "http://age-of-empires-2-api.herokuapp.com/api/v1/civilization/".$name,
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

		$selectedCiv = json_decode($response);

		$civBonus = $selectedCiv->civilization_bonus;

		$civFromDB = civilizations::find($selectedCiv->id);

		$uniqueUnitURL = $selectedCiv->unique_unit;

		$uniqueUnits = self::uniqueUnit($uniqueUnitURL);

		return view('uniqueciv', compact('selectedCiv', 'civBonus', 'civFromDB', 'uniqueUnits'));

    }

    private function uniqueUnit($unit) {

    	$uniqueUnits = [];
    	$images = [];

    	foreach ($unit as $key => $value) {

    		$curl = curl_init();

    		curl_setopt_array($curl, array(
    		  CURLOPT_URL => $unit[$key],
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
    		}

    		$uniqueUnits[$key] = ['infos' => json_decode($response), 'img' => 'img/icons/units/'.Str::snake(json_decode($response)->name).'.jpg', 'elite' => (json_decode($response)->id) + 1];
    	}

    	return $uniqueUnits;

    }

}
