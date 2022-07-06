<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller {
    public function showIndex() {
        return view("guest.index");
    }

    public function showJelajahi() {
        return view("guest.jelajahi");
    }

    public function showRequirements() {
        return view("guest.ketentuan");
    }
}
