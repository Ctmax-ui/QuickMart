<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Product;

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

    public function updateAddressAndPhone(Request $request)
    {
        $validatedData = $request->validate([
            'address' => 'required|string|max:255',
            'phone' => 'required|regex:/^[0-9]{3}[0-9]{2}[0-9]{3}[0-9]{2}$/|min:10|max:12',
        ]);
        $user = $request->user();
        $user->address = $validatedData['address'];
        $user->phone_number = $validatedData['phone'];
        $user->save();
        return Redirect::route('userprofile')->with('status', 'profile-address-phone-updated');
    }

    public function addToCart($id){
        $item= Product::findOrFail($id);
        $cart=session()->get('cart',[]);

        if(isset($cart[$id])){
            $cart[$id]['quantity']++;
        }else{
            $cart[$id]=[
                "name"=>$item->p_name,
                "quantity"=>1,
                "price"=>$item->p_price,
                "image"=>$item->p_image,
            ];
        }
        session()->put('cart',$cart);
        return redirect()->back()->with('success','Item has been added in your cart');
    }

    public function itemscart(){
        return view('main.sections.itemsCart');
    }
    public function deleteItemsInCart(Request $request){
        if($request->id){
            $cart=session()->get('cart');
            if(isset($cart[$request->id])){
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success','Item Removed successfully.');
        }
    }
}

