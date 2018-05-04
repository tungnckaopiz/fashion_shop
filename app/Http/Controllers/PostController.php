<?php
/**
 * Created by PhpStorm.
 * User: kaopiz
 * Date: 31/03/2018
 * Time: 16:37
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
           'title' => 'required|unique:posts|max:255',
           'body' =>'required'
        ]);
    }
}