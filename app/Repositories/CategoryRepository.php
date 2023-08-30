<?php

namespace App\Repositories;

use App\Interfaces\CategoryRepositoryInterface;
use App\Models\Category;

class CategoryRepository implements CategoryRepositoryInterface
{

    public function getParentCategories()
    {
        return Category::with('subCategories')->get();
    }

    public function createCategory($data)
    {
        return Category::query()->create($data);
    }

    public function getSubCategories($categoryId)
    {
        return Category::query()->where('parent_id', $categoryId)->get();
    }
}
