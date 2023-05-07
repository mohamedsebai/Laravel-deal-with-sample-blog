<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// include model post
use App\Models\Post;

//use string slug or url friendlly
use Illuminate\Support\Str;

class PostsController extends Controller
{
    public function index()
    {
      /* ** first way to send data
        $post = Post::all();
        return view('blog.index', [
          'posts' => $post
        ]);
      */
      // best way to send data
        $post = Post::orderBy('id', 'DESC')->get(); // if you want to show the array of data use this dd($post);
        return view('blog.index')->with('posts', $post);
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $post = new Post;

        $request->validate([
          'title'       => 'required',
          'description' => 'required',
          'image'       => ['required', 'mimes:jpg,png,jif,jped', 'max:5000', 'dimensions:min_width=100,min_height=100'],
        ]);


        if ($request->hasfile('image')) { // chek if request has file

          // dd($request) all informatin about request

          // laravel slug
          $slug = Str::slug($request->title, '-');
          // php native slug and get string lower case
          // $slug = str_replace(' ', '-', strtolower($request->title));

          $extension =  $request->image->extension();
          $newImageName = rand(0, mt_getrandmax()) . '-' . $slug . '.' . $extension;
          $request->image->move(public_path('imgs'), $newImageName);

          Post::create([
             // take the fillable in Post Model
             // insert data into Database
            'title' => $request->input('title'),
            'slug' => $slug,
            'description' => $request->input('description'),
            'image_path' => $newImageName,
            'user_id'    => auth()->user()->id // get session auth
          ]);

          return  redirect()->route('blog.index');

        } // end if request has file

    }

    public function show($slug)
    {
        return view('blog.show')->with( 'post', Post::where('slug', $slug)->first() );
     }

    public function edit($id)
    {
        return view('blog.edit')->with( 'post', Post::where('id', $id)->first() );
    }

    public function update(Request $request, $id)
    {


        $exitst_data = Post::findOrFail($id);

        $ImageNameFromDataBase =  $exitst_data->image_path;
        $slug                  =   Str::slug($request->title, '-');

        $request->validate([
          'title'       => 'required',
          'description' => 'required',
          'image'       => ['mimes:jpg,png,jif,jped', 'max:5000', 'dimensions:min_width=100,min_height=100']
        ]);

        // img validate
        if ( !$request->hasfile('image') ) {
           $newImageName = $ImageNameFromDataBase;
        }else{
          $extension =  $request->image->extension(); // get file extension
          $newImageName = rand(0, mt_getrandmax()) . '-' . "-Img" . '.' . $extension;
          $request->image->move(public_path('imgs'), $newImageName);
        }

        //
        Post::where('id', $id)->update([
          'title' => $request->input('title'),
          'slug' => $slug,
          'description' => $request->input('description'),
          'image_path' => $newImageName,
          'user_id'    => auth()->user()->id // get session auth
        ]);
        return  redirect()->route('blog.show', $slug)->with('message', 'success edit');



    } // end update

    public function destroy($id)
    {
      $post_to_delete = Post::findOrFail($id);
      $post_to_delete->delete();
      //Post::where('id', $id)->delete(); // other way to delete
      return redirect()->route('blog.index')->with('message', 'delete success');
    }
}
