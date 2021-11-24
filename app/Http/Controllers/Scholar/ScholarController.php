<?php

namespace App\Http\Controllers\Scholar;

use App\Http\Controllers\Controller;

class ScholarController extends Controller
{
    //
    public function __construct()
    {

    }

    public function overviewView()
    {
        return view('scholars/overview');
    }

    public function trackerView()
    {
        return view('scholars/tracker');
    }

    public function axiesView()
    {
        return view('scholars/axies');
    }

    public function walletView()
    {
        return view('scholars/wallet');
    }

    public function paymentsView()
    {
        return view('scholars/payments');
    }

    public function shareView()
    {
        return view('scholars/share');
    }

    public function settingsView()
    {
        return view('scholars/settings');
    }

    public function faqView()
    {
        return view('scholars/faq');
    }

    public function loginView()
    {
        return view('scholars/auth/login');
    }

    public function registerView()
    {
        return view('scholars/auth/register');
    }
}
