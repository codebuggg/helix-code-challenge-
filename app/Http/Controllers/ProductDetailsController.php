<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductDetailsController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('product-details', ['product' => [
            "activeChoiceId" => 3,
            "fabricChoices" => [
                [
                    "id" => 1,
                    "title" => "Amber",
                    "image" => asset("images/sofa-amber.jpeg")
                ],
                [
                    "id" => 2,
                    "title" => "Charcoal",
                    "image" => asset("images/sofa-charcoal.jpeg")
                ],
                [
                    "id" => 3,
                    "title" => "Red",
                    "image" => asset("images/sofa-red.jpeg")
                ]
            ],
            "title" => "The sofa",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac dui interdum, tincidunt velit sit amet.",
            "price" => [
                "actual" => "1,450",
                "discount" => "1,250",
                "monthly" => "25",

            ]

        ]]);
    }


}
