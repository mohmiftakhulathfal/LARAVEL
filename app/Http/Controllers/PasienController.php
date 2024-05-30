<?php

namespace App\Http\Controllers;
use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index(){

        $list_pasien = Pasien::all();
        return view('admin.pasien.index', compact('list_pasien'));
    }
}
