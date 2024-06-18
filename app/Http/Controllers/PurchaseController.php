<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Purchase;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function myPurchases() 
    {
        $purchases = Purchase::where('user_id', auth()->user()->id)->paginate(4);
        return view('purchases/index', [
            'purchases' => $purchases,
        ]);
    }

    public function details(int $id)
    {
        return view('purchases/details',[
            'purchase' => Purchase::findOrFail($id)
        ]); 
    }

    public function adminAllPurchases()
    {
        $purchases = Purchase::paginate(20);
        return view('admin/purchases/index',[
            'purchases' => $purchases,
        ]);
    }

    public function adminDetailsPurchase(int $id)
    {
        $purchase = Purchase::findOrFail($id);
        return view('admin/purchases/details',[
            'purchase' => $purchase,
        ]);
    }
}
