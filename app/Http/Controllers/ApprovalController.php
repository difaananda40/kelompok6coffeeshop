<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ApprovalController extends Controller
{
    public function index()
    {
        $users = User::where('approved', 0)->get();

        $data = [
            'users' => $users
        ];

        return view('admin.approval', $data);
    }

    public function approve(Request $request, $id) {
        $user = User::findOrFail($id);
        $user->update([
            'approved' => 1
        ]);

        return redirect()->route('admin.approval');
    }
}
