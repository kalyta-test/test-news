<?php

namespace App\Http\Service;

use App\Http\Repository\CategoryRepository;
use App\Models\Category;

class CategoryService
{
    private CategoryRepository $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function createCategory(array $data): Category
    {
        return $this->categoryRepository->createFromArray($data);
    }

    public function getCategoryById(int $id): Category
    {
        return $this->categoryRepository->getCategoryById($id);
    }

    public function updateFromArray(Category $category, array $data): Category
    {
        return $this->categoryRepository->updateFromArray($category, $data);
    }
}
