<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Civilizations;

class HomeController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    // public function __construct() {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index() {
        return view('home');
    }

    public function getDesc() {

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

        return view('home', compact('civsInfos'));

    }

    public function insertDesc(Request $request) {

        $civilization = new Civilizations;
        $civilization->name = $request->input('name');
        $civilization->desc = $request->input('desc');
        $civilization->save(); 

        return view('post-form');

    }

    public function updateDesc(Request $request) {

        $civilization = civilizations::find($request->input('name'));
        $civilization->desc = $request->input('desc');
        $civilization->save();

        return view('post-form');

    }

    public function deleteDesc(Request $request) {

        $civilization = civilizations::where('name', $request->input('name'));
        $civilization->delete();

        return view('post-form');
    }
}
