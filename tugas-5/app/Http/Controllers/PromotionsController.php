<?php
namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionsController extends Controller
{
    public function index()
    {
        $promotions = Promotion::all();
        return view('page.promotions', compact('promotions')); // Mengarah ke view promotions
    }

    public function create()
    {
        return view('page.promotionscreate'); // Mengarah ke view promotionscreate
    }

    public function store(Request $request)
    {
        // Validasi dan simpan data
        $request->validate([
            'image' => 'required',
            'caption' => 'required',
        ]);

        Promotion::create($request->all());
        return redirect()->route('page.promotions')->with('success', 'Promotion created successfully.');
    }

    public function edit($id)
    {
        $promotion = Promotion::findOrFail($id);
        return view('page.promotionsedit', compact('promotion')); // Mengarah ke view promotionsedit
    }

    public function update(Request $request, $id)
    {
        // Validasi dan update data
        $request->validate([
            'image' => 'required',
            'caption' => 'required',
        ]);

        $promotion = Promotion::findOrFail($id);
        $promotion->update($request->all());
        return redirect()->route('page.promotions')->with('success', 'Promotion updated successfully.');
    }

    public function destroy($id)
    {
        $promotion = Promotion::findOrFail($id);
        $promotion->delete();
        return redirect()->route('page.promotions')->with('success', 'Promotion deleted successfully.');
    }
}
