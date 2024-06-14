<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()){
            $query = Article::all();
            $table = DataTables::of($query);
            $table->addColumn('actions',function ($row){
                $edit = route('admin.articles.edit');
                $delete = route('admin.articles.destroy');
                return view('admin.layouts.partials.dataTableActions',compact('edit','delete'));
            })->rawColumns(['actions']);
            return  $table->make();
        }
        return view('admin.articles.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Validator::make($request->all(),[
            'title'=>'required|string|max:255',
            'description'=>'nullable|string|max:400',
            'date'=>'required|date_format:d/m/Y',
            'article'=>'required|string',
            'thumbnail'=>'nullable|image|max:2048'
        ],[
            'title.required'=>'Le titre est obligatoire',
            'title.string'=>'Le titre doit être un text',
            'title.max'=>'Le titre doit comporter moins de 255 caractères',
            'description.string'=>"La description doit être un text",
            'description.max'=>"La description doit comporter moins de 400 caractères",
            'article.required'=>'L\'article est obligatoire',
            'article.string'=>'L\'article doit être un text',
            'thumbnail.required'=>'L\'image est obligatoire',
            'thumbnail.image'=>'L\'image doit être une image',
        ],[
            'title'=>'titre',
            'description'=>'description',
            'type'=>'type',
            'article'=>'article',
            'thumbnail'=>'image'
        ])->validate();
        $thumbnail_path =null;
        if ($request->hasFile('thumbnail')){
            $thumbnail_path =  $request->file('thumbnail')->store('public/articles');
        }
        Article::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'date' => Carbon::createFromFormat('d/m/Y',$request->input('date')),
            'show_in_home' => $request->input('show_in_home') == 'on',
            'article' => $request->input('article'),
            'thumbnail' => $thumbnail_path ? str_replace('public/','',$thumbnail_path) : $thumbnail_path
        ]);
        session()->flash('success','Article ajouté');
        return redirect()->route('admin.articles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}
