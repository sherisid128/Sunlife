<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employee;
use App\certification;
use DB;
use Carbon\Carbon;

class PagesController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function forgotPass() {
        return view('pages.forgetPassword');
    }
    public function dashboard() {
        $employee= employee::orderBy('created_at','desc')->get();
        $cer = DB::table('certifications')->where('expires_at','<=',Carbon::now()->toDateString())->get();
        $count1 = count($cer);
        $count = count($employee);
        return view('pages.dashboard')->with([
            'count1'=>$count1,
            'count'=>$count
            ]);
    }
    public function help() {
        return view('pages.help');
    }
    public function howto(){
        return view('pages.howto');
    }
    public function dcvault(){
        return view('pages.dcvault');
    }
    
}
