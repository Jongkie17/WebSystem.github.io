<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $customers = [
            [
                'name' => 'Philip Malayao',
                'email' => 'lagrimasroseann975@example.com',
                'phone' => '09171234567'
            ],
            [
                'name' => 'John Cruz',
                'email' => 'johnC@example.com',
                'phone' => '09181234567'
            ],
            [
                'name' => 'Anne Reyes',
                'email' => 'anne@example.com',
                'phone' => '09191234567'
            ],
            [
                'name' => 'Mark Garcia',
                'email' => 'Garciamark@example.com',
                'phone' => '09201234567'
            ],
            [
                'name' => 'Liza Torres',
                'email' => 'Torliza@example.com',
                'phone' => '09211234567'
            ]
        ];

        return view('customers', ['customers' => $customers]);
    }
}