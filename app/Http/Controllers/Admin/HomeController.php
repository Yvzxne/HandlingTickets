<?php

namespace App\Http\Controllers\Admin;

use Gate;
use Symfony\Component\HttpFoundation\Response;
use App\Ticket;

class HomeController
{
    public function index()
    {
        abort_if(Gate::denies('dashboard_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $totalTickets = Ticket::count();
        $openTickets = Ticket::whereHas('status', function($query) {
            $query->whereName('In Progress');
        })->count();
        $closedTickets = Ticket::whereHas('status', function($query) {
            $query->whereName('Resolved');
        })->count();

        return view('home', compact('totalTickets', 'openTickets', 'closedTickets'));
    }
}
