<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::all();
        return view('backend.member.index', compact('members'));
    }
    public function create()
    {
        return view('backend.member.create');
    }
}
