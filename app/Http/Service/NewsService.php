<?php

namespace App\Http\Service;

use App\Http\Repository\NewsRepository;
use App\Models\News;

class NewsService
{
    private NewsRepository $newsRepository;

    public function __construct(NewsRepository $newsRepository)
    {
        $this->newsRepository = $newsRepository;
    }

    public function createNews(array $data): News
    {
        return $this->newsRepository->createFromArray($data);
    }

    public function getNewsById(int $id): News
    {
        return $this->newsRepository->getNewsById($id);
    }

    public function getActiveNews()
    {
        return $this->newsRepository->getActiveNews();
    }

    public function getAllNews()
    {
        return $this->newsRepository->getAllNews();
    }

    public function updateFromArray(News $news, array $data): News
    {
        return $this->newsRepository->updateFromArray($news, $data);
    }
}
