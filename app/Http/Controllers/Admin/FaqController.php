<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::orderBy('order')->orderBy('created_at', 'desc')->paginate(15);
        return view('admin.faqs.index', compact('faqs'));
    }

    public function create()
    {
        return view('admin.faqs.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'question_en' => 'required|string|max:500',
            'question_ar' => 'required|string|max:500',
            'answer_en' => 'required|string',
            'answer_ar' => 'required|string',
            'order' => 'nullable|integer',
            'is_active' => 'nullable|boolean',
        ]);

        Faq::create([
            'question' => [
                'en' => $validated['question_en'],
                'ar' => $validated['question_ar'],
            ],
            'answer' => [
                'en' => $validated['answer_en'],
                'ar' => $validated['answer_ar'],
            ],
            'order' => $validated['order'] ?? 0,
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('admin.faqs.index')
            ->with('success', 'FAQ created successfully!');
    }

    public function show(Faq $faq)
    {
        return view('admin.faqs.show', compact('faq'));
    }

    public function edit(Faq $faq)
    {
        return view('admin.faqs.edit', compact('faq'));
    }

    public function update(Request $request, Faq $faq)
    {
        $validated = $request->validate([
            'question_en' => 'required|string|max:500',
            'question_ar' => 'required|string|max:500',
            'answer_en' => 'required|string',
            'answer_ar' => 'required|string',
            'order' => 'nullable|integer',
            'is_active' => 'nullable|boolean',
        ]);

        $faq->update([
            'question' => [
                'en' => $validated['question_en'],
                'ar' => $validated['question_ar'],
            ],
            'answer' => [
                'en' => $validated['answer_en'],
                'ar' => $validated['answer_ar'],
            ],
            'order' => $validated['order'] ?? 0,
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('admin.faqs.index')
            ->with('success', 'FAQ updated successfully!');
    }

    public function destroy(Faq $faq)
    {
        $faq->delete();

        return redirect()->route('admin.faqs.index')
            ->with('success', 'FAQ deleted successfully!');
    }
}
