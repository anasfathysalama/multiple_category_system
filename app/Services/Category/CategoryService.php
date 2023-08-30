<?php

namespace App\Services\Category;

use App\Interfaces\CategoryRepositoryInterface;

class CategoryService
{

    protected CategoryRepositoryInterface $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function getParentCategories()
    {
        return $this->categoryRepository->getParentCategories();
    }

    public function createCategory($data)
    {
        return $this->categoryRepository->createCategory($data);
    }

    public function getSubCategories($categoryId)
    {
        return $this->categoryRepository->getSubCategories($categoryId);
    }

}
