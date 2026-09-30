<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $customers = [
            [
                'full_name' => 'Maria Santos',
                'email' => 'maria@example.com',
                'phone' => '09171234567'
            ],
            [
                'full_name' => 'John Cruz',
                'email' => 'john@example.com',
                'phone' => '09181234567'
            ],
            [
                'full_name' => 'Anne Reyes',
                'email' => 'anne@example.com',
                'phone' => '09191234567'
            ],
            [
                'full_name' => 'Mark Garcia',
                'email' => 'mark@example.com',
                'phone' => '09201234567'
            ],
            [
                'full_name' => 'Liza Torres',
                'email' => 'liza@example.com',
                'phone' => '09211234567'
            ]
        ];

        return view('customers', ['customers' => $customers]);
    }
}