<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Events\OrderCompleted;
use App\Order;
use App\OrderLine;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Stripe\Charge;
use Stripe\Stripe;
use Auth;

class PaymentController extends Controller
{
    public function index()
    {
        $user_cart = Auth::user()->cart()->with('product')->get();

        $total_sum = 0;

        foreach($user_cart as $item)
        {
            $total_sum += $item->quantity * $item->product->discounted_price;
        }

        return view('payments.index', compact('total_sum'));
    }
    public function store(Request $request)
    {
        $user_cart = Auth::user()->cart()->with('product')->get();

        $total_sum = 0;

        foreach($user_cart as $item)
        {
            $total_sum += $item->quantity * $item->product->discounted_price;
        }

        Stripe::setApiKey ( env('STRIPE_SECRET', 'sk_test_Qlhmjf7HUItHnmHwbGZBSrG3'));

        try {
            Charge::create ( array (
                "amount" => $total_sum * 100, // pagesa eshte me centa 1 * 100
                "currency" => "usd",
                "source" => $request->input ( 'stripeToken' ), // obtained with Stripe.js
                "description" => "Payment from ecommerce"
            ) );
            Session::flash ( 'success-message', 'Payment done successfully !');

            Cart::where("user_id", Auth::user()->id)->delete();

            $order = Order::create([
                'user_id' => Auth::user()->id,
                'price' => $total_sum
            ]);

            foreach ($user_cart as $cart_item)
            {
                OrderLine::create([
                    'order_id' => $order->id,
                    'product_id' => $cart_item->product->id,
                    'quantity' => $cart_item->quantity,
                    'price' => $cart_item->quantity * $cart_item->product->discounted_price
                ]);
            }

            event(new OrderCompleted());

            return redirect("/");

        } catch ( \Exception $e ) {
            Session::flash ( 'fail-message', $e->getMessage() );
            return redirect()->back();
        }
    }
}
