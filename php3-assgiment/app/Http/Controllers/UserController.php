<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UserStore;

class UserController extends Controller
{

    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        if ($keyword == null) {
            $users = User::paginate(10);
        } else {
            $users = User::where('name', 'like', '%' . $keyword . '%')->paginate(3);
        }
        return view('admin.user.index', compact('users'));
    }


    public function create()
    {
        return view('admin.user.create');
    }


    public function store(UserStore $request)
    {
        $user = new User();
        $user->fill($request->all());
        $user->password = bcrypt($request->password);
        if ($request->hasFile('image')) {
            $nameFile = $request->image->getClientOriginalName();
            $newNameFile = 'product-' . $nameFile;
            $path = $request->image->storeAs('products', $newNameFile, 'public');
            $user->avatar = 'storage/' . $path;
        }
        $user->save();
        return redirect()->route('users.index')->with('msg', 'Thêm thành công');
    }


    public function destroy($id)
    {
        if (isset($id) || empty($id)) {
            User::destroy($id);
            return redirect()->route('users.index');
        }
    }
}
