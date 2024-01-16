<?php

namespace App\Http\Controllers;

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
        $data['page'] = "Profile";
        $data['title'] = "Profile";
        $data['pageTitle'] = "Profile";
        return view('profile.edit', [
            'user' => $request->user(), 'page' => $data['page'], 'title' => $data['title'], 'pageTitle' => $data['pageTitle']
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): array
    {
        try {
            $request->user()->fill($request->validated());



            $request->user()->save();
            if (request()->ajax()) {
                $output = [
                    'success' => true,
                    'data' => '',

                    'msg' => 'Profile Update Successully'
                ];
            } else {
                $output = redirect()->back()->with(['msg' => 'Experience Update Successully', 'success' => true]);
            }
        } catch (\Exception $e) {
            \Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
            $output = [
                'success' => false,
                'msg' => 'Something Went Wrong.'
            ];
        }
        return $output;
        // return Redirect::route('profile.edit')->with('status', 'profile-updated');
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
}
