<?php

namespace App\Http\Controllers;

use App\Http\Resources\User;
use App\Models\Playlist;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource as ArticleResource;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Facades\Storage;

class PlaylistController extends Controller
{
    private static $messages = [
        'required' => 'El campo :attribute es obligatorio.',
        'unique' => 'El campo :attribute ya existe, escriba otro',
        //'body.required' => 'Body no valido',
    ];

    public function index()
    {
        //$this->authorize('viewAny', Article::class);
        //return response()->json(ArticleResource::collection(Article::all()), 200);
        return Playlist::all();
    }
    public function show(Playlist $playlist, User $user)
    {
        $user = $playlist->users()->where('id', $user->id)->firstOrFail();
        $this->authorize('view', $playlist);
        //return Playlist::find($playlist);
        return response()->json($playlist->users());
    }
//    public function image(Article $article)
//    {
//        return response()->download(public_path(Storage::url($article->image)),
//            $article->title);
//    }
    public function store(Request $request)
    {

        $this->authorize('create', Playlist::class);

        $request->validate($rules = [
            'name' => 'required|string|unique:articles|max:255',
        ], self::$messages);

//        $article = new Playlist($request->all());
//        $path = $request->image->store('public/articles');
//        //$path = $request->image->storeAs('public/articles', $request->user()->id . '_' . $article->title . '.' . $request->image->extension());
//        $article->image = $path;
//        $article->save();

        //$article = Article::create($request->all());
        return Playlist::create($request->all());
    }
    public function update(Request $request, Playlist $playlist)
    {
        $this->authorize('update', $playlist);

        $request -> validate($rules = [
            'name' => 'required|string|unique:articles,title,' . $playlist->id . '|max:255',
        ], self::$messages);

        $playlist->update($request->all());
        return response()->json($playlist, 200);
    }
    public function delete(Request $request, Playlist $playlist)
    {
        $this->authorize('delete', $playlist);
        $playlist->delete();
        return response()->json(null, 204);
    }
}
