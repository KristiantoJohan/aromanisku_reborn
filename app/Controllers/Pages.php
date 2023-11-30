<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | AromanisKU',
            'setActive' => 'active'
        ];
        return view('pages/home', $data);
    }


    public function about()
    {
        $data = [
            'title' => 'About | AromanisKU',
            'arrayKU' => [1, 2, 3, 4, 5]
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us | AromanisKU',
            'address' => [
                [
                    'nama' => 'Muhamad Haidar Al-Farruq',
                    'email' => 'muhamadhaidar555@gmail.com',
                    'domisili' =>'bandung'
                ],
                [
                    'nama' => 'Julio Caesar Ray Bakar Gani',
                    'email' => 'masjul@gmail.com',
                    'domisili' =>'Bangka Belitung'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
}
