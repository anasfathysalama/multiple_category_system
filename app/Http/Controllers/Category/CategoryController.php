<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\CategoryRequest;
use App\Services\Category\CategoryService;

class CategoryController extends Controller
{

    private CategoryService $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        $parentCategories = $this->categoryService->getParentCategories();
        return view('categories.index', compact('parentCategories'));
    }

    public function store(CategoryRequest $request)
    {
        try {
            $this->categoryService->createCategory($request->validated());
            return response()->json(['success' => true, 'message' => 'Category created successfully'], 201);
        } catch (\Exception $exception) {
            return response()->json(['success' => false, 'message' => $exception->getMessage(), 'trace' => $exception->getTrace()], 400);
        }
    }

    public function getSubCategories($categoryId)
    {
        $data = $this->categoryService->getSubCategories($categoryId);
        return response()->json(['success' => true, 'message' => 'Category loaded successfully', 'data' => $data], 200);
    }
}
