<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function dashboard(){
    	return view('admin.pages.dashboard');
    }
    public function clients(){
    	return view('admin.pages.clients.index');
    }
    public function clientsCreate(){
    	return view('admin.pages.clients.create');
    }
    public function invoice(){
    	return view('admin.pages.invoice.index');
    }
    public function invoiceCreate(){
    	return view('admin.pages.invoice.create');
    }
}
