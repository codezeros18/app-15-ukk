<?php

namespace App\Http\Controllers;

use App\Models\akun;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;

class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::latest()->get();
        return view('akun.dashboard')->with([
            'user' => $user,
            'title' => 'Akun | Dashboard',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('akun.create')->with([
            'title' => 'Akun | Create',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        try {
            $user = $request->validate([
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
                'role' => 'required',
            ]);

            User::create($user);

            return redirect()->route('akun.index');

        } catch (\Exception $e) {
            // Rollback jika terjadi kesalahan
            dd($e);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(akun $akun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id):View
    {
        $user = User::findOrFail($id);;
        return view('akun.edit')->with([
            'title' => 'Akun | Edit',
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $user = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);

        $user = User::findOrFail($id);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'role' => $request->role,
        ]);
        return redirect()->route('akun.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('akun.index');
    }
}
