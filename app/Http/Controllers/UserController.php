<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash; // Tambahkan ini!


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        $users = User::all(); // atau sesuai kebutuhan, misal paginate dsb
        // $users = User::where('is_seeded', false)->get();
    return view('admin.user', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.userCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users,email',
            'name' => 'required|string|max:255',
            'role' => 'required|in:admin,employee',
            'password' => 'required',
        ]);

        // Simpan user baru
        User::create([
            'email' => $request->email,
            'name' => $request->name,
            'role' => $request->role,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('user.index')->with('success', 'User berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Cari user berdasarkan ID
    $user = User::findOrFail($id);

    // Kirim data user ke view form edit
    return view('admin.userEdit', compact('user'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'email' => 'required|email',
            'role' => 'required|string',
            'name' => 'required|string',
            'password' => 'nullable|string|min:6',
        ]);

        $user = User::findOrFail($id);

        $user->email = $request->email;
        $user->role = $request->role;
        $user->name = $request->name;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('user.index')->with('success', 'Data user berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('user.index')->with('success', 'User berhasil dihapus.');
    }
}
