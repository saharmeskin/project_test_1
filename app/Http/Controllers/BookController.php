<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Models\Book;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    // private function books(): array
    // {
    // return
    // }


    public function index()
    {
        // $books =  Book::all();

        // builder
        $books = DB::table('books')->get();


        //builder-test
        // $books = DB::table('books')->select('id', 'name')->get();
        //
        // یک لیست از ستون ها وقتی key valus 
        //    selectbar <select> <option value = id>name</option> </select>
        // $books = DB::table('books')->pluck('name', key: 'id');


        return view('home', [

            // 'books' => $this->books()
            'books' => $books
        ]);
    }


    public function show(int $id)
    {
        // $book = Arr::first($this->books(), fn($item) => $item['id'] == $id);
        // $book = Book::find($id);

        // builder
        $book = DB::table('books')->where('id', '=', $id)->first();

        return view('show', [
            'book' => $book
        ]);
    }

    public function create()
    {

        //return view form
    }

    public function store()
    {
        // builder
        $book = DB::table('books')->insert([
            'title'  => 'teste1',
            'description' => 'Describe the main plot, theme, or idea only.',
            'author' => 'sahar mes'
        ]);
    }

    public function edit(int $id)
    {
        // return view form  book id 
    }

    public function update(int $id)
    {
        // builder
        $book = DB::table('books')->where('id', '=', $id)->update([
            'title' => 'Diary of a Nobody'
        ]);
    }

    public function destroy(int $id)
    {
        // builder
        $book = DB::table('books')->where('id', '=', $id)->delete();
        dd($book);
    }
}
