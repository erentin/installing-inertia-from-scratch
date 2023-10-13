<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function __invoke()
    {

        sleep(3);

        return inertia()->render('Dashboard');
    }
}
