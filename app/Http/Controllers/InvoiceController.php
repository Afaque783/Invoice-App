<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Invoice;
use Psy\Readline\Hoa\Console;

class InvoiceController extends Controller
{
    public function get_all_invoice() {
        $invoices = Invoice::all();
        // console.log($invoices);
        return response()->json([
            'invoices' => $invoices
        ],200);
        
    }

}
