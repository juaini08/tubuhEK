<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index(){
    	return view('welcome');
    }


    public function borang(){
    	 return view('borang_tubuhek');
    }

    public function senarai_semak(){
    	return view('senarai_semakan_ek');
	}

	public function senarai_semak_tidak_lengkap(){
    	return view('senarai_semakan_ek_tidak_lengkap');
	}

	public function permohonan_hantar(){
    	return view('permohonan_hantar');
	}

	public function status_proses(){
    	return view('status_proses');
	}

	public function status_berjaya(){
    	return view('status_berjaya');
	}

	public function kemaskini_permohonan(){
    	return view('kemaskini_permohonan');
	}


}
