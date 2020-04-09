<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class NasionalController extends Controller
{
    protected $data = array();    

    public function index()
    {
        return redirect('nasional/indonesia');
    }

    public function indonesia()
    {
        $response = Http::get('https://api.kawalcorona.com/indonesia');
        $recSum = $response->json();
        $response = Http::get('https://api.kawalcorona.com/indonesia/provinsi');
        $recDetails = $response->json();
        $this->data = array(
            'title'         => 'indonesia',
            'sub_title'     => 'Nasional',
            'recSum'        => $recSum,
            'recDetails'    => $recDetails
        );
        return view('nasional.indonesia', $this->data);
    }
    
}
