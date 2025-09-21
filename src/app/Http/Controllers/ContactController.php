<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;
use App\Models\Category;

class ContactController extends Controller
{
    //index.blade表示とContactに紐づく、カテゴリをトップページに出力する処理
    public function index()
    {
        $contacts = Contact::with('category')->get();
        $categories = Category::all();
        return view('index', compact('contacts', 'categories'));
    }//
    public function confirm(ContactRequest $request)
    {
        $contact = $request->only([
        'category_id','last_name','first_name','gender','email','tel1','tel2','tel3','address','building','detail']);
        $category = Category::find($contact['category_id']);
        return view('confirm', compact('contact','category'));
    }
    //category_idとcontactテーブルの内容をデータベースに保存
    public function store(ContactRequest $request)
    {
        $contact = $request->only(['category_id','last_name', 'first_name','gender','email','tel1','tel2','tel3','address','building','detail']);
        Contact::create($contact);
        return view('thanks');
    }
    //検索
    public function search(Request $request){
    $contacts = Contact::with('category')->CategorySearch($request->category_id)->KeywordSearch($request->keyword)->get();
    $categories = Category::all();
    return view('admin', compact('contacts', 'categories'));
    }
}