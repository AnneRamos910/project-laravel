<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    public function index()
     {
        $forms = Form::all();

        return view('welcome',['forms' => $forms]);
    }

    public function create()
    {
        return view('form.create');
    }


    public function store(Request $request) {
      $form = new Form;

      $form->title = $request->title;
      $form->description = $request->description;
      $form->date = $request->date;

      $user = auth()->user();
      $form->user_id = $user->id;

      $form->save();

      return redirect('/')->with('msg', 'Criado com sucesso!');
      
    }

    public function show($id) {
        $form = Form::findOrFail($id);

        return view('forms.show', ['form' => $form]);
    }
}
