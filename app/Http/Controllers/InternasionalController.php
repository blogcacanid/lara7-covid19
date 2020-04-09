<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class InternasionalController extends Controller
{
    protected $data = array();    

    public function index()
    {
        return redirect('internasional/indonesia');
    }

    public function dunia()
    {
        // Positif
        $response = Http::get('https://api.kawalcorona.com/positif');
        $recSumPositif = $response->json();
        
        // Sembuh
        $response = Http::get('https://api.kawalcorona.com/sembuh');
        $recSumSembuh = $response->json();

        // Meninggal
        $response = Http::get('https://api.kawalcorona.com/meninggal');
        $recSumMeninggal = $response->json();
        
        
        $response = Http::get('https://api.kawalcorona.com/');
        $recDetails = $response->json();
        $this->data = array(
            'title' => 'dunia',
            'sub_title' => 'Internasional',
            'recSumPositif'    => $recSumPositif,
            'recSumSembuh'    => $recSumSembuh,
            'recSumMeninggal'    => $recSumMeninggal,
            'recDetails'    => $recDetails
        );
        return view('internasional.dunia', $this->data);
//        return view('internasional.dunia', compact($this->data));
    }
    
}
