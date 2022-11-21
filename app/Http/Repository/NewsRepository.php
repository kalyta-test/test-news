<?php

namespace App\Http\Repository;

use App\Models\News;

class NewsRepository
{
    private array $fillable = [
        'header',
        'text',
        'publicationDate',
        'previewImage'
    ];

    public function createFromArray(array $data): News
    {
        $model = new News();
        $this->fillFromArray($model, $data);
        $model->save();
        return $model;
    }

    public function updateFromArray(News $model, array $data): News
    {
        $this->fillFromArray($model, $data);
        $model->save();
        return $model;
    }

    public function getNewsById(int $id): News
    {
        return News::find($id);
    }

    public function getActiveNews()
    {
        return News::where('status', '=', News::STATUS_ACTIVE);
    }

    public function getAllNews()
    {
        return News::all();
    }

    private function fillFromArray(News $model, array $data)
    {
        foreach ($data as $key => $value) {
            if (in_array($key, $this->fillable)) {
                $model->$key = $value;
            }
        }
    }

}
