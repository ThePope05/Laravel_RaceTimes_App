<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Time;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function welcome(): View
    {
        $topLaps = [];
        $topLaps['ever'] = Time::orderBy('lap_time', 'asc')->limit(5)->get();
        $topLaps['month'] = Time::where('created_at', '>=', now()->subMonth())->orderBy('lap_time', 'asc')->limit(5)->get();
        $topLaps['week'] = Time::where('created_at', '>=', now()->subWeek())->orderBy('lap_time', 'asc')->limit(5)->get();

        $mostLaps = [];
        $mostLaps['ever'] = Time::selectRaw('user_id, count(*) as count')->groupBy('user_id')->orderBy('count', 'desc')->limit(5)->get();
        $mostLaps['month'] = Time::selectRaw('user_id, count(*) as count')->where('created_at', '>=', now()->subMonth())->groupBy('user_id')->orderBy('count', 'desc')->limit(5)->get();
        $mostLaps['week'] = Time::selectRaw('user_id, count(*) as count')->where('created_at', '>=', now()->subWeek())->groupBy('user_id')->orderBy('count', 'desc')->limit(5)->get();

        $fastestCars = [];
        $fastestCars['ever'] = Car::orderBy('power', 'desc')->orderBy('weight', 'asc')->limit(5)->get();
        $fastestCars['month'] = Car::where('created_at', '>=', now()->subMonth())->orderBy('power', 'desc')->orderBy('weight', 'asc')->limit(5)->get();
        $fastestCars['week'] = Car::where('created_at', '>=', now()->subWeek())->orderBy('power', 'desc')->orderBy('weight', 'asc')->limit(5)->get();

        return view('welcome', [
            'topLaps' => $topLaps,
            'mostLaps' => $mostLaps,
            'fastestCars' => $fastestCars
        ]);
    }
}
