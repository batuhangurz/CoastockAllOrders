<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function GetTotalOrders()
    {
        $arr = [
            [
                "id" => 4,
                "product_name" => "Lay's Yoğurt 107 Gr",
                "quantity" => 6,
                "suppliers" => [
                    "A101",
                    "ŞOK",
                    "MİGROS"
                ]
            ],
            [
                "id" => 7,
                "product_name" => "Snickers 80 Gr",
                "quantity" => 4,
                "suppliers" => [
                    "ŞOK",
                    "BİM"
                ]
            ],
            [
                "id" => 1,
                "product_name" => "Haribo Starmix Yumuşak Şeker 80 Gr",
                "quantity" => 3,
                "suppliers" => [
                    "A101",
                    "MİGROS",
                    "CARREFOURSA"
                ]
            ],
            [
                "id" => 9,
                "product_name" => "Coca Cola Orijinal Tat 330 Ml",
                "quantity" => 2,
                "suppliers" => [
                    "A101",
                    "ŞOK"
                ]
            ],
            [
                "id" => 8,
                "product_name" => "Lay's Yoğurt 169 Gr",
                "quantity" => 1,
                "suppliers" => [
                    "BİM",
                    "A101",
                    "CARREFOURSA"
                ]
            ]
        ];

        return view("purchase", ['arr' => $arr]);
    }
}
