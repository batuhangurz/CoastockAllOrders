<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function AllOrders()
    {
        $arr2 = [
            [
                "id" => 2,
                "customer_name" => "Batuhan Gürz",
                "imo_number" => "IMO8712345",
                "products" => [
                    "Lay's Yoğurt 107 Gr" => "x3",
                    "Snickers 80 Gr" => "x1",
                    "Lay's Yoğurt 169 Gr" => "x1",
                    "Haribo Starmix Yumuşak Şeker 80 Gr" => "x2",
                    "Coca Cola Orijinal Tat 330 Ml" => "x2"
                ]
            ],
            [
                "id" => 6,
                "customer_name" => "Sevan Haddeler",
                "imo_number" => "IMO6721104",
                "products" => [
                    "Lay's Yoğurt 107 Gr" => "x3",
                    "Snickers 80 Gr" => "x3",
                    "Haribo Starmix Yumuşak Şeker 80 Gr" => "x1"
                ]
            ],
        ];

        return view("orders", ['arr2' => $arr2]);
    }
}
