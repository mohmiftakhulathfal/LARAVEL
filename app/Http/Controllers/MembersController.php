<?php

namespace App\Http\Controllers;
use App\Models\Members;

use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function index(){

        $list_members = Members::all();
        return view('admin.members.index', compact('list_members'));
    }
}
