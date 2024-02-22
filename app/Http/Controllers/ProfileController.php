<?php

namespace App\Http\Controllers;

use App\Models\Time;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    /**
     * Display the user's dashboard.
     */
    public function dashboard(): View
    {
        $topLaps = Time::where('user_id', Auth::id())->orderBy('lap_time', 'asc')->limit(5)->get();
        $lastLap = Time::where('user_id', Auth::id())->orderBy('created_at', 'desc')->first();
        $mostUsedCar = Time::select('car_id')->where('user_id', Auth::id())->groupBy('car_id')->orderByRaw('COUNT(*) DESC')->first();
        $mostDrivenTrack = Time::select('circuit_id')->where('user_id', Auth::id())->groupBy('circuit_id')->orderByRaw('COUNT(*) DESC')->first();

        return view('dashboard', [
            'topLaps' => $topLaps,
            'lastLap' => $lastLap,
            'mostUsedCar' => $mostUsedCar->car,
            'mostDrivenTrack' => $mostDrivenTrack->circuit,
        ]);
    }
}
