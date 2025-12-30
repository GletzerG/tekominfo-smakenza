<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $teachers = [
            [
                'name' => 'Sayom SPD',
                'title' => 'Programming Teacher',
                'description' => 'Ahli IT selama 10 tahun',
                'photo' => 'images/teachers/guru1.png'
            ],
            [
                'name' => 'Sayom SPD',
                'title' => 'Programming Teacher',
                'description' => 'Ahli IT selama 10 tahun',
                'photo' => 'images/teachers/guru2.png'
            ],
            [
                'name' => 'Sayom SPD',
                'title' => 'Programming Teacher',
                'description' => 'Ahli IT selama 10 tahun',
                'photo' => 'images/teachers/guru3.png'
            ],
            [
                'name' => 'Budi Santoso',
                'title' => 'Electronics Engineer',
                'description' => 'Spesialis perangkat IoT',
                'photo' => 'images/teachers/guru4.png'
            ],
            [
                'name' => 'Budi Santoso',
                'title' => 'Electronics Engineer',
                'description' => 'Spesialis perangkat IoT',
                'photo' => 'images/teachers/guru5.png'
            ],
            [
                'name' => 'Budi Santoso',
                'title' => 'Electronics Engineer',
                'description' => 'Spesialis perangkat IoT',
                'photo' => 'images/teachers/guru6.png'
            ]

        ];

        return view('navbar.about.teacher-profile', compact('teachers'));
    }
}
