<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function realEstate() 
    {
        return view('services/real_estate_law');
    }

    public function generalLitigation()
    {
        return view('services/general_litigation');
    }

    public function corporateAndFinanceLaw()
    {
        return view('services/corporate_and_finance_law');
    }

    public function labourAndIndustrialLaw()
    {
        return view('services/labour_and_industrial_law');
    }

    public function legalAdvisory()
    {
        return view('services/legal_advisory');
    }

    public function consumerProtectionLaw()
    {
        return view('services/consumer_protection_law');
    }
    
    public function internationalTradeLaw()
    {
        return view('services/international_trade_law');
    }

    public function entertainmentAndSportsLaw()
    {
        return view('services/entertainment_and_sports_law');
    }
}
