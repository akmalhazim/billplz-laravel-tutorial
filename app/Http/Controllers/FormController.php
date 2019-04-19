<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BillplzFormCreationRequest;

use Billplz\Client;


class FormController extends Controller
{
    public function viewForm() {
        return view('form');
    }

    public function submitForm(BillplzFormCreationRequest $request) {
        // dd($request->all());

        $billplz = Client::make(config('billplz.billplz_key'), config('billplz.billplz_signature'));

        if(config('billplz.billplz_sandbox')) {
            $billplz->useSandbox();
        }

        $bill = $billplz->bill();

        $bill = $bill->create(
            config('billplz.billplz_collection_id'),
            $request->customer_email,
            null,
            $request->customer_name,
            \Duit\MYR::given($request->product_price * 100),
            url('/'),
            'Any Description because we dont have description dynamically.',
            ['redirect_url' => url('/redirect')]
        );

        return redirect($bill->toArray()['url']);

    }

    public function billplzHandleRedirect(Request $request) {

        $billplz = Client::make(config('billplz.billplz_key'), config('billplz.billplz_signature'));

        if(config('billplz.billplz_sandbox')) {
            $billplz->useSandbox();
        }

        $bill = $billplz->bill();

        try {
            $bill = $bill->redirect($request->all());
        } catch(\Exception $e) {
            dd($e->getMessage());
        }

        $bill['data'] = $billplz->bill()->get($bill['id'])->toArray();

        return view('handleBill', compact('bill'));
    }
}
