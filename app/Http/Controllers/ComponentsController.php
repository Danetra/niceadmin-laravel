<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentsController extends Controller
{
    //
    public function alerts()
    {
        return view("admin.components.alerts");
    }

    public function accordion()
    {
        return view("admin.components.accordion");
    }

    public function badges()
    {
        return view("admin.components.badges");
    }

}
