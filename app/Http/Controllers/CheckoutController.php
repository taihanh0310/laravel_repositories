<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;
use App\Services\ShoppingCartService;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends AdminController {

    private $cartSev;
    public function __construct(ShoppingCartService $cartSev) {
        parent::__construct();
        $this->cartSev = $cartSev;
    }

    public function index($cart_id) {
        $user = Auth::user();
        $datas = $this->cartSev->showCartList($user->id);
        $checkout_date = date('Y-m-d H:i:s', strtotime('now'));
        $cart = $datas['cart'];
        $items = $datas['items'];
        return view('checkout.index', compact('cart','items','checkout_date','user'));
    }

    public function store(Request $request) {
        $data = $request->all();
        $result = $this->cartSev->addOrder($data);
        dd($result);
        return view('checkout.completed');
    }
}
