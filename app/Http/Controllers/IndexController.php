<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class IndexController extends Controller
{
    public $header = 'Новости науки';

    public function index() {
        $rubrics = Post::get();
        return view('index')->with(['header'=>$this->header, 'rubrics'=>$rubrics]);
    }

    public function rubric($rubric) {
        $rubrics = Post::where('rubrics', $rubric)->get();
        return view('rubric')->with(['header'=>$this->header, 'title'=>$rubric, 'rubric'=>$rubrics]);
    }

    public function statya($id) {
        $statya = Post::findOrFail($id);
        return view('statya')->with(['header'=>$this->header, 'statya'=>$statya]);
    }

    public function delete(Post $post) {
        $this->authorize('delete');
        $post->delete();
        return redirect('/');
    }

    public function add()
    {
        $this->authorize('store');
        return view('add');
    }

    public function change(Post $post)
    {
//        $post = Post::findOrFail($id);
        $this->authorize('edit');
        return view('edit')->with(['post'=>$post]);
    }

    public function store(Request $request)
    {
        $this->authorize('store');
        $post = new Post();
        $post->title = $request->input('title');
        $post->lid = $request->input('lid');
        $post->content = $request->input('content');
        $post->rubrics = $request->input('rubrics');
        $post->image = $request->input('image');
        $post->save();
//        dd($request->all());
        return redirect()->route('statya', ['id' => $post->id]);
    }

    public function edit(Post $post, Request $request)
    {
        $this->authorize('edit');
        $post->update([
            'title'     => $request->get('title'),
            'lid' => $request->get('lid'),
            'content'    => $request->get('content'),
            'rubrics'    => $request->get('rubrics'),
            'image'   => $request->get('image')
            ]);
        return redirect()->route('statya', ['id' => $post->id]);
    }
}
