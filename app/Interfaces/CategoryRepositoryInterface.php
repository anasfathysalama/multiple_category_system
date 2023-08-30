<?php

namespace App\Interfaces;

interface CategoryRepositoryInterface
{
    public function getParentCategories();

    public function createCategory($data);
    public function getSubCategories($categoryId);
}
