<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
<<<<<<< HEAD
     public function index()
    {
        $data = [
            'nama' => 'Doraemon',
            'pekerjaan' => 'Developer',
        ];

        return view('home')->with($data);
=======
    public function index()
    {
        // $data = [
        //     'nama' => 'Doraemon',
        //     'pekerjaan' => 'Developer',
        // ];

        // return view('home')->with($data);

        $nama = "Nobita";
        $pekerjaan = "Student";
        return view('home', compact('nama','pekerjaan'));
>>>>>>> d97ba82c1b1f083438c3eeeb8cdfa916ce7bbc6e
    }

    public function contact()
    {
        return view('contact');
    }
}
