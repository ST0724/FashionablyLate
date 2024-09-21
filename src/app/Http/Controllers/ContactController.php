<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;

class ContactController extends Controller
{
  public function index()
  {
    $categories = Category::all();
    return view('contact', compact('categories'));
  }

  public function confirm(ContactRequest $request){
    $request->merge(['tell' => "$request[tell_1]". "$request[tell_2]". "$request[tell_3]"]);
    $contact = $request->only([
      'first_name','last_name', 'gender', 'email', 'tell', 'address', 'building', 'detail', 'category_id'
    ]);
    return view('confirm', compact('contact'));
  }

  public function store(Request $request)
  {
    $contact = $request->only([
      'first_name','last_name', 'gender', 'email', 'tell', 'address', 'building', 'detail', 'category_id'
    ]);
    Contact::create($contact);
    return view('thanks');
  }

    public function thanks()
  {
    $categories = Category::all();
    return view('contact', compact('categories'));
  }



  public function admin()
  {
    $contacts = Contact::all();
    $contacts = Contact::simplePaginate(7);
    return view('admin', compact('contacts'));
  }

  public function search(Request $request)
  {
    $contacts = Contact::with('category')->KeywordSearch($request->keyword)->get();
    $categories = Category::all();
    return view('admin', compact('contacts', 'categories'));
  }

  public function register_index()
  {
    return view('register');
  }

  public function login_index()
  {
    return view('login');
  }

  public function register(RegisterRequest $request)
  {
    return view('register');
  }

    public function login(LoginRequest $request)
  {
    return view('admin');
  }
}
