<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    
    public function index()
    {
      
        $news = News::orderBy('created_at', 'desc')->get();

        return view('news.index',compact('news'));
    }

    public function create()
    {
        //

        return view('news.create');

    }

    public function store(Request $request)
    {
       
        News::create($request->all()); 
        return redirect()->route('news.create')->with('success','News created successfully.');;
    }

        public function show(News $news)
    {
        //
        return 'show';
    }

    public function edit(News $news)
    {
      
        $news = News::find($news->id);
        //dd($news->title);
        return view('news.edit',compact('news'));
    }

    public function update(Request $request, News $news)
    {
        dd($news->id);
    
        News::where('id', $news->id)->update($request->only(['title', 'description', 'image_url']));
        return redirect()->route('news.index')->with('success', 'News updated successfully.');
    }

    public function destroy(News $news)
    {
        //
        $news->delete();
        return redirect()->route('news.index')->with('success', 'News deleted successfully.');
    }
}
