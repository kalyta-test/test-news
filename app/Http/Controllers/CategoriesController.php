<?php

namespace App\Http\Controllers;

use App\Http\Service\CategoryService;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;


class CategoriesController extends Controller
{
    private CategoryService $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        $categories = Category::all();
        //$categories->toArray();
        View::share([
            'categories' => $categories
        ]);

        return view('categories.index');
    }

    public function edit(int $id)
    {
        $category = $this->categoryService->getCategoryById($id);

        return view('categories.edit', $category);
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $this->validate($request, $this->getFromRules());
        $this->categoryService->createCategory($input);

        return view('categories.index');
    }

    public function update(Request $request, int $id)
    {
        $input = $request->except(['id']);

        $this->validate($request, $this->getFromRules());
        $category = $this->categoryService->getCategoryById($id);
        $this->categoryService->updateFromArray($category, $input);

        return view('categories.index');
    }

    private function getFromRules(): array
    {
        return [
            'name' => 'required',
        ];
    }

}
