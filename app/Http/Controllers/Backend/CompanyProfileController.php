<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyProfileController extends Controller
{
    //CompanyProfileIndex
    public function CompanyProfileIndex(){
        return view('admin.backend.company_profile.index');
    }
}
