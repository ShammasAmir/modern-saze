<?php

namespace App\Http\Controllers\Administrator;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Http\Requests\Administrator\User\UpdateUserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return 'user controller';
        // return view('admin.users.index');

        // $users = User::all();
        // dd($users);

        $users = User::paginate(2);
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // return view('admin.users.edit');

        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    public function update(UpdateUserRequest $request, $id)
    {
        // return 'user updated!';

        // $request->validate([
        //     'name'=>'required|string|max:255',
        //     // 'email'=>'required|string|email|max:255|unique:users',
        //     // 'email'=>['required','string','email','max:255','unique:users'],
        //     'email'=>['required','string','email','max:255',Rule::unique('users')->ignore($id)],
        //     // 'mobile'=>'required|string|max:255|unique:users',
        //     'mobile'=>['required','string','max:255',Rule::unique('users')->ignore($id)],
        //     'role'=>'required|string|max:255',
        // ]);

        // dd($request->all());

        $user = User::findOrFail($id);
        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'role'=>$request->role,
        ]);

        // $request->session()->flash('update','کاربر با موفقیت ویرایش شد');
        $request->session()->flash('update');

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->destroy($id);
        $request->session()->flash('destroy');
        return redirect()->route('users.index');
    }
}
