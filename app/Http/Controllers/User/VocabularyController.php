<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\VocabularyRequest;
use App\Models\Category;
use App\Models\Vocabulary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VocabularyController extends Controller
{
    private $vocabulary;
    private $category;

    public function __construct(Vocabulary $vocabulary, Category $category)
    {
        $this->middleware('auth');
        $this->vocabulary = $vocabulary;
        $this->category = $category;
    }

    /**
     * display vocabulary list
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $vocabulary = $this->vocabulary->all();
        return view('user.vocabulary.index', compact('vocabulary'));
    }

    /**
     * display vocabulary form
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $categories = Category::pluck('name', 'id');
        return view('user.vocabulary.create', compact('categories'));
    }

    /**
     * save vocabulary
     *
     * @param VocabularyRequest $request validation
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(VocabularyRequest $request)
    {
        $inputs = $request->validated();
        $inputs['user_id'] = Auth::id();
        $this->vocabulary->fill($inputs)->save();
        return redirect()->route('vocabulary.index');
    }

    /**
     * display edit form
     *
     * @param integer $vocabularyId
     * @return \Illuminate\View\View
     */
    public function edit($vocabularyId)
    {
        $categories = Category::pluck('name', 'id');
        $vocabulary =$this->vocabulary->find($vocabularyId);
        return view('user.vocabulary.edit', compact('categories', 'vocabulary'));
    }

    /**
     * update vocabulary
     *
     * @param VocabularyRequest $request validation
     * @param integer $vocabularyId
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(VocabularyRequest $request, $vocabularyId)
    {
        $inputs = $request->validated();
        $inputs['user_id'] = Auth::id();
        $this->vocabulary->find($vocabularyId)->fill($inputs)->save();
        return redirect()->route('vocabulary.index');
    }
}