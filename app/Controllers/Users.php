<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data['users'] = [
            [
                'id'       => 1,
                'username' => 'admin02',
                'name'     => 'Miguel Ramos',
                'role'     => 'Administrator',
                'status'   => 'Active',
            ],
            [
                'id'       => 2,
                'username' => 'cashier03',
                'name'     => 'Sofia Castillo',
                'role'     => 'Cashier',
                'status'   => 'Active',
            ],
            [
                'id'       => 3,
                'username' => 'cashier04',
                'name'     => 'Daniel Navarro',
                'role'     => 'Cashier',
                'status'   => 'Inactive',
            ],
            [
                'id'       => 4,
                'username' => 'manager02',
                'name'     => 'Patricia Lim',
                'role'     => 'Manager',
                'status'   => 'Active',
            ],
            [
                'id'       => 5,
                'username' => 'staff02',
                'name'     => 'Joshua Villanueva',
                'role'     => 'Staff',
                'status'   => 'Active',
            ],
        ];

        return view('users/index', $data);
    }
}