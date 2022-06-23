<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Property;
use Illuminate\Support\Facades\Auth;

class SalesController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $items = Company::where('user_id', $user->id)->get();
        return view('index',['items'=>$items]);
    }
    
    public function edit($param){
        $id = $param;
        $item = Company::where('id', $id)->first();
        return view ('update',['item'=>$item]);
    }

    public function update(Request $request){
        $this->validate($request, Company::$rules);
        // propertyテーブル（モデル）のValidationはトグル選択のため不要
        $item = $request->all();
        unset($item['_token']);
        Company::where('id', $request->id)->update($item);
        // hidden formで送られてきたidと照合
        // 検索が$item->idでは何故だめ？
        return redirect('/home');
    }

    public function add(){
        return view('add');
    }

    public function create(Request $request){
        $this->validate($request, Company::$rules);
        // propertyテーブル（モデル）のValidationはトグル選択のため不要
        $item = $request->all();
        $user = Auth::user();
        $item['user_id'] = $user->id;
        unset($item['updated_at']);
        Company::create($item);
        return redirect('/home');
    }

    public function find(Request $request){
        $items = Company::where('name','LIKE',"%{$request->input}%")->orWhere('representative','LIKE',"%{$request->input}%")->get();
        return view('index', ['items'=>$items]);
    }
}
