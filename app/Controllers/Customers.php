<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $data['customers'] = [
            [
                'id'      => 1,
                'name'    => 'Andrea Bautista',
                'email'   => 'andrea.bautista@gmail.com',
                'phone'   => '09162347851',
                'address' => 'Caloocan City',
            ],
            [
                'id'      => 2,
                'name'    => 'Nathaniel Cruz',
                'email'   => 'nathaniel.cruz@gmail.com',
                'phone'   => '09274518362',
                'address' => 'Valenzuela City',
            ],
            [
                'id'      => 3,
                'name'    => 'Bianca Flores',
                'email'   => 'bianca.flores@gmail.com',
                'phone'   => '09385629473',
                'address' => 'Marikina City',
            ],
            [
                'id'      => 4,
                'name'    => 'Gabriel Aquino',
                'email'   => 'gabriel.aquino@gmail.com',
                'phone'   => '09496731584',
                'address' => 'Mandaluyong City',
            ],
            [
                'id'      => 5,
                'name'    => 'Clarisse Mendoza',
                'email'   => 'clarisse.mendoza@gmail.com',
                'phone'   => '09517842695',
                'address' => 'Parañaque City',
            ],
        ];

        return view('customers/index', $data);
    }
}