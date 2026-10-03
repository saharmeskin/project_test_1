<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;


class BookController extends Controller
{
    private function books(): array
    {
        return [
            [
                'id'  => '1',
                'title'  => 'Jenseits von Gut und Böse',
                'date' => '1996',
                'author' => ' Anna Chui ',
                'image' => 'data:image/jpeg;base64,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'

            ],

            [
                'id'  => '2',
                'title'  => 'The inheritance game',
                'date' => '1998',
                'author' => ' Charles John '
            ],

            [
                'id'  => '3',
                'title'  => 'Nineteen Eighty-Four',
                'date' => '1999',
                'author' => ' Shakespeare'
            ],

            [
                'id'  => '4',
                'title'  => 'The Diary of a Nobody',
                'date' => '2000',
                'author' => ' Jane Bronte'
            ]

        ];
    }


    public function index()
    {
        return view('home', [

            'books' => $this->books()
        ]);
    }


    public function show(int $id)
    {
        $book = Arr::first($this->books(), fn($item) => $item['id'] == $id);

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
        // validate form
        // store data in database
        // redirect book
    }

    public function edit(int $id)
    {
        // return view form  book id 
    }

    public function update(int $id)
    {
        // validate form
        // update data in database
        // redirect book
    }

    public function destroy(int $id)
    {
        // delete book id
    }
}
