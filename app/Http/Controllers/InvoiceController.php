<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Client;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function getInvoiceInfo(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'invoice_id' => 'required'
        ]);

        $clientId = $request->user_id;
        $invoiceId = $request->invoice_id;
        
        $client =  Client::find($clientId);

        if($client){
            $invoice = $client->invoices->where('id', $invoiceId)->first();

            if($invoice){
                $invoiceRows = $invoice->invoiceRows;
                $invoiceFiles = $invoice->files;
            }else{
                return redirect()->route('dashboard-client.index')->with('error', 'The invoice does not exist');
            }

        }else{
            return redirect()->route('dashboard-client.index')->with('error', 'The user does not exist');
        }
        
        return view('dashboard-client.invoices.info', compact('client', 'invoice', 'invoiceRows', 'invoiceFiles'));
    }
}
