<?php

namespace App\Http\Repository;

use App\Models\Category;

class CategoryRepository
{
    private array $fillable = [
        'name',
        'status',
    ];

    public function createFromArray(array $data): Category
    {
        $model = new Category();
        $this->fillFromArray($model, $data);
        $model->save();
        return $model;
    }

    public function updateFromArray(Category $model, array $data): Category
    {
        $this->fillFromArray($model, $data);
        $model->save();
        return $model;
    }

    public function getCategoryById(int $id): Category
    {
        return Category::find($id);
    }

    private function fillFromArray(Category $model, array $data)
    {
        foreach ($data as $key => $value) {
            if (in_array($key, $this->fillable)) {
                $model->$key = $value;
            }
        }
    }

}
