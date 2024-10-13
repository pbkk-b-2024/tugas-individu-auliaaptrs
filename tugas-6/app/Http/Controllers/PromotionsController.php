<?php
namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;
namespace App\Http\Controllers;
use Inertia\Inertia;

class PromotionsController extends Controller
{
    public function index()
    {
        return Inertia::render('Promotions');
    }
    
}

