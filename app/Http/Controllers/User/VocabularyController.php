<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class VocabularyController extends Controller
{
    // private $vocabulary;
    // private $category;

    // public function __construct(Vocabulary $vocabulary, Category $category)
    // {
    //     $this->vocabulary = $vocabulary;
    //     $this->category = $category;
    // }

    /**
     * display vocabulary list
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('user.vocabulary.index');
    }

    /**
     * display vocabulary form
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $categories = Category::pluck('name');
        return view('user.vocabulary.create', compact('categories'));
    }
}