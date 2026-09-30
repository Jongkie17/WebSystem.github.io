<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            [
                'username' => 'admin',
                'full_name' => 'Philip Malayao',
                'role' => 'Administrator'
            ],
            [
                'username' => 'cashier01',
                'full_name' => 'Watanice Santos',
                'role' => 'Cashier'
            ],
            [
                'username' => 'staff01',
                'full_name' => 'Abby Cruz',
                'role' => 'Staff'
            ],
            [
                'username' => 'staff02',
                'full_name' => 'Nadine Reyes',
                'role' => 'Staff'
            ],
            [
                'username' => 'manager01',
                'full_name' => 'Mav Garcia',
                'role' => 'Manager'
            ]
        ];

        return view('users', ['users' => $users]);
    }
}