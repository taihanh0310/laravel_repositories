<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;
use App\Services\ShoppingCartService;

class CheckoutController extends AdminController {

    private $cartSev;
    public function __construct(ShoppingCartService $cartSev) {
        parent::__construct();
        $this->cartSev = $cartSev;
    }

    public function index($cart_id) {
        return view('checkout.index');
    }

    public function store(Request $request) {
        return view('checkout.completed');
    }
}
