<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;
use \Carbon\Carbon;

class LinkController extends Controller
{

    public function index()
    {
        return view('welcome');
    }

    public function create()
    {
        return view('link.create');
    }

    public function store(Request $request)
    {
        $slug = Carbon::now()->format('YmdHis');
        $link = Link::create([
            'name' => $request->name,
            'link' => $request->link,
            'slug' => $slug
        ]);
        return redirect()->route('link.show',$link->id);
    }

    public function show($id)
    {
        $link = Link::all();
        return view('link.show', compact('link'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
