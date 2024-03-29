<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use App\Models\Pendidikan;
use App\Models\Pengalaman;
use App\Models\Project;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){

        $biodata = Biodata::first();
        $pendidikan = Pendidikan::get();
        $pengalaman = Pengalaman::get();
        $project = Project::get();
        return view('welcome',[
            'biodata'=>$biodata,
            'pendidikan'=>$pendidikan,
            'pengalaman'=>$pengalaman,
            'project'=>$project,
        ]);
    }
}