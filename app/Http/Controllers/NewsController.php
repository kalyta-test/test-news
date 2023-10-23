<?php

namespace App\Http\Controllers;

use App\Http\Service\NewsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class NewsController extends Controller
{
    private NewsService $newsService;

    public function __construct(NewsService $newsService)
    {
        $this->newsService = $newsService;
    }

    public function index()
    {
        $news = $this->newsService->getAllNews();

        View::share([
            'news' => $news
        ]);
        return view('news.index');
    }

    public function edit(int $id)
    {
        $news = $this->newsService->getNewsById($id);

        return view('news.edit', $news);
    }

    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $this->validate($request, $this->getFromRules());
        $this->newsService->createNews($input);

        return view('news.index');
    }

    public function update(Request $request, int $id)
    {
        $input = $request->except(['id']);

        $this->validate($request, $this->getFromRules());
        $news = $this->newsService->getNewsById($id);
        $this->newsService->updateFromArray($news, $input);

        return view('news.index');
    }

    public function getAllNews()
    {
        $news = $this->newsService->getAllNews();
        View::share([
            'news' => $news
        ]);
        return view('news.index');
    }

    private function getFromRules(): array
    {
        return [
            'header' => 'required',
            'text' => 'required',
        ];
    }
}
