<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NormalizationController extends Controller
{
    public function index()
    {
        return view('normalization.index');
    }

    public function firstNF()
    {
        return view('normalization.first_nf');
    }

    public function secondNF()
    {
        return view('normalization.second_nf');
    }

    public function thirdNF()
    {
        return view('normalization.third_nf');
    }

    public function bcnf()
    {
        return view('normalization.bcnf');
    }
}
