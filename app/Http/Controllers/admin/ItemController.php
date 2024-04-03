<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Http\Controllers\Controller;


class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view("home", compact("items"));
    }
    public function welcome()
    {
        return view("welcome");
    }
}
