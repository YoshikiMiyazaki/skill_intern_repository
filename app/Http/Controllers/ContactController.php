<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;
use DB;

class ContactController extends Controller
{
    public function input()
    {
      return view("contact.input");
    }

    public function post(Request $request)
    {
      $validator = Validator::make($request->all(),[
        "name" => "string|required",
        "hurigana" => "string|required",
        "mail" => "email|required",
        "content" => "string|required",
      ]);
      if ($validator->fails()){
        return redirect('/input')
                      ->withErrors($validator)
                      ->withInput();
      }
      return redirect()->route('contact.confirm',[
        "name" => $request->name,
        "hurigana" => $request->hurigana,
        "mail" => $request->mail,
        "content" => $request->content,
      ]);
    }

    public function confirm($name, $hurigana, $mail, $content)
    {
      if (url()->previous() === 'http://localhost:8000/input') {
        return view("contact.confirm")->with([
          "name" => $name,
          "hurigana" => $hurigana,
          "mail" => $mail,
          "content" => $content,
        ]);
      }else {
        return redirect()->route('contact.input');
      }
    }

    public function create(Request $request)
    {
      $param = [
          "name" => $request->name,
          "email" => $request->mail,
          "content" => $request->content,
      ];
      DB::table('contacts')->insert($param);

      return redirect()->route("contact.complete");
    }

    public function complete()
    {
        return view("contact.complete");
    }
}
