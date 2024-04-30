<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    // Show the profile page
    public function showProfile()
    {
        return view('auth.profile');
    }

    //Add or Update the User's town
    public function addOrUpdateTown(Request $request)
    {
        // Validate the request data
        $request->validate([
            'town' => 'required|string|max:255',
        ]);

        // Get the authenticated user
        $user = $request->user();

        // Update or add the user's town
        $user->town = $request->town;
        $user->save();

        // Determine the appropriate message based on whether the town was updated or added
        $message = $user->wasChanged('town') ? 'Town updated successfully.' : 'Town added successfully.';

        // Store a success message in the session
        $request->session()->flash('success', $message);

        // Redirect back to the profile page
        return redirect()->route('profile')->with('scroll_to_section', 'town_section');
    }
    

    //Add or Update the User's address
    public function addOrUpdateAddress(Request $request)
    {
        // Validate the request data
        $request->validate([
            'address' => 'required|string|max:255',
        ]);

        // Get the authenticated user
        $user = $request->user();

        // Update or add the user's address
        $user->address = $request->address;
        $user->save();

        // Determine the appropriate message based on whether the address was updated or added
        $message = $user->wasChanged('address') ? 'Address updated successfully.' : 'Address added successfully.';

        // Store a success message in the session
        $request->session()->flash('success', $message);

        // Redirect back to the profile page
        return redirect()->route('profile')->with('scroll_to_section', 'address_section');
    }

    //Add or Update the User's postal code
    public function addOrUpdatePostalCode(Request $request)
    {
        // Validate the request data
        $request->validate([
            'postal_code' => 'required|string|max:10',
        ]);

        // Get the authenticated user
        $user = $request->user();

        // Update or add the user's postal code
        $user->postal_code = $request->postal_code;
        $user->save();

        // Determine the appropriate message based on whether the postal code was updated or added
        $message = $user->wasChanged('postal_code') ? 'Postal code updated successfully.' : 'Postal code added successfully.';

        // Store a success message in the session
        $request->session()->flash('success', $message);

        // Redirect back to the profile page with the scroll_to_section parameter
        return redirect()->route('profile')->with('scroll_to_section', 'postal_code_section');
    }

    //Add or Update the User's card number
    public function addOrUpdateCardNumber(Request $request)
    {
        // Validate the request data
        $request->validate([
            'card_number' => 'required|string|max:16',
        ]);

        // Get the authenticated user
        $user = $request->user();

        // Update or add the user's card number
        $user->card_number = $request->card_number;
        $user->save();

        // Determine the appropriate message based on whether the card number was updated or added
        $message = $user->wasChanged('card_number') ? 'Card number updated successfully.' : 'Card number added successfully.';

        // Store a success message in the session
        $request->session()->flash('success', $message);

        // Redirect back to the profile page with the scroll_to_section parameter
        return redirect()->route('profile')->with('scroll_to_section', 'card_number_section');
    }

    //Add or Update the User's card expiration date
    public function addOrUpdateCardExpiry(Request $request)
    {
        // Validate the request data
        $request->validate([
            'card_expiry' => 'required|string',
        ]);

        // Get the authenticated user
        $user = $request->user();

        // Update or add the user's card expiry
        $user->card_expiry = $request->card_expiry;
        $user->save();

        // Determine the appropriate message based on whether the card expiry was updated or added
        $message = $user->wasChanged('card_expiry') ? 'Card expiry updated successfully.' : 'Card expiry added successfully.';

        // Store a success message in the session
        $request->session()->flash('success', $message);

        // Redirect back to the profile page with the scroll_to_section parameter
        return redirect()->route('profile')->with('scroll_to_section', 'card_expiry_section');
    }

   //Add or Update the User's card CVC
   public function addOrUpdateCVC(Request $request)
    {
        // Validate the request data
        $request->validate([
            'cvc' => 'required|string|max:4',
        ]);

        // Get the authenticated user
        $user = $request->user();

        // Update or add the user's CVC
        $user->cvc = $request->cvc;
        $user->save();

        // Determine the appropriate message based on whether the CVC was updated or added
        $message = $user->wasChanged('cvc') ? 'CVC updated successfully.' : 'CVC added successfully.';

        // Store a success message in the session
        $request->session()->flash('success', $message);

        // Redirect back to the profile page with the scroll_to_section parameter
        return redirect()->route('profile')->with('scroll_to_section', 'cvc_section');
    }
}
