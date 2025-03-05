<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::all();
        return view('statics-pages.faq')->with('faqs', $faqs);
    }
    public function create()
    {
        return view ('faqs.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);

        $faqs = new Faq();
        $faqs->question = $data['question'];
        $faqs->answer = $data['answer'];
        $faqs->save();

        return redirect('/faq')->with('success', 'New FAQ Created Successfully');
    }
    public function edit($id)
    {
        $faq = Faq::find($id);
        return view('faqs.edit', compact('faq'));

    }
    public function update(Request $request, Faq $faq)
    {
        $data = $request->validate([
            'question' => 'required',
            'answer' => 'required|',
        ]);

        $faq->question = $data['answer'];
        $faq->answer = $data['question'];
        $faq->save();

        return redirect('/faq');
    }
    public function destroy($id)
    {
        $faq = Faq::find($id);
        $faq->delete();
        return redirect('/faq');
    }
}
