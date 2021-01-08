<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use App\FAQQuestions;

class FAQQuestionsController extends Controller
{
    public function index()
    {
        try {
            $faqList = FAQQuestions::all();
            return view('admin.faq.index', compact("faqList"));
        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }


    public function create()
    {
        return view('admin.faq.create');
    }

    public function store(Request $request)
    {
        $faq = new FAQQuestions();
        $faq->question = $request->question;
        $faq->answers = $request->answers;
        $faq->save();

        return redirect()
                ->route('faqs.index')
                ->with('message', 'Your FAQ has been successfully added.');
    }

    public function edit(FAQQuestions $faq)
    {
        return view('admin.faq.edit', compact('faq'));
    }

    public function update(Request $request, $id)
    {
        $faq = FAQQuestions::find($id);
        $faq->question = $request->question;
        $faq->answers = $request->answers;
        $faq->save();

        return redirect()
                ->route('faqs.index')
                ->with('message', 'Your FAQ has been successfully update.');
    }

    public function delete(FAQQuestions $faq)
    {
        $faq->delete();
        return redirect()
                ->route('faqs.index')
                ->with('message', 'Your FAQ has been successfully deleted.');
    }
}
