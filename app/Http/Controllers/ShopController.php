<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mollie\Laravel\Facades\Mollie;

class ShopController extends Controller
{
    public function getSucces() {
        dd('Betaling wordt verwerkt');
    }
    public function donation() {
        $title = 'Donation';
        $image = 'images/overdrop.png';
        $message = "Hoeveel wil je doneren";

        return view('pages.donation', [
            'title' => $title,
            'image' => $image,
            'message' => $message
        ]);
    }

    public function preparePayment()
    {
        $value = (string) CartFacade::session(Auth::user()->id)->getTotal();
        $payment = Mollie::api()->payments->create([
            "amount" => [
                "currency" => "EUR",
                "value" => "10.00"
            ],
            "description" => "Order #12345",
            "redirectUrl" => route('webhooks.mollie'),
            "webhookUrl" => route('shop.paymentSuccess'),
        ]);

        $payment = Mollie::api()->payments->get($payment->id);

        return redirect($payment->getCheckoutUrl(), 303);
    }
}
