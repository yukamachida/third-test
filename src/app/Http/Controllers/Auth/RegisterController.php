<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


class RegisterController extends Controller
{
    public function registerStep1()
    {
        return view('register');
        //登録ページ１
    }

    public function postStep1(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        //userテーブルにpost
      
        return redirect('/register/step2')->with('user_id, $user_id');
        //次のページに進む->情報を保存して次につなげる
    }

    public function registerStep2(User $user)
    {
        return view('weight_input', compact('user'));
        //登録ページ２
    }

    public function completeRegistration(Request $request, User $user)
    {
        $userId = session('user_id');  // セッションからユーザーIDを取得

        $user = User::find($userId); // ユーザーをデータベースから取得

        $validated = $request->validate([
            'current_weight' => 'required|numeric|regex:/^\d{1,4}(\.\d{1})?$/',
            'target_weight' => 'required|numeric|regex:/^\d{1,4}(\.\d{1})?$/',
        ]);

        $user->current_weight = $request->current_weight;
        $user->target_weight = $request->target_weight;
        $user->save();

        return redirect('/weight_logs');
        //管理画面に移動
    }
    public function create()
    {
        return view('create'); //体重登録画面
    }



    public function index()
    {
        return view('index');

    }

    //public function store(Request $request)
    {
        User::create(
            $request->only([
                'current_weight',
                'target_weight',
            ])
        )
    }

    public function login()
    {
        return view('login');
    }
 

}
