<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class FetchUser extends Controller
{
    //

    public function index(Request $request)
    {
        $search = $request->input('search_user');
        $users = User::where('name', 'like', "%$search%")->orWhere('email', 'like', "%$search%")->orWhere('is_admin', $search === 'true')->orWhere('address', 'like', "%$search%")->orWhere('phone_number', 'like', "%$search%")->get();
        return view('admin.userDetails', ['users' => $users]);
    }

    public function updateAdminStatus(Request $request)
    {
        $userId = $request->userId;
        $isAdmin = $request->isAdmin;

        // Find the user by ID
        $user = User::findOrFail($userId);

        // Update the is_admin attribute
        $user->is_admin = $isAdmin;
        $user->save();
        return response()->json(['message' => 'Admin status updated successfully']);
    }
}
