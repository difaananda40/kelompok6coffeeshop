<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coffee = Menu::where('type', 'coffee')->get();
        $snack = Menu::where('type', 'snack')->get();

        $data = [
            'coffee' => $coffee,
            'snack' => $snack
        ];

        return view('menu', $data);
    }
}
