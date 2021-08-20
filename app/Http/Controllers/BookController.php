<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    protected $book;
    protected $category;
    protected $author;
    protected $publisher;

    public function __construct(Book $book, Category $category, Author $author, Publisher $publisher)
    {
        $this->book = $book;
        $this->category = $category;
        $this->author = $author;
        $this->publisher = $publisher;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listBooks = DB::table('books')
            ->join('authors', 'authors.author_id', '=', 'books.author_id')
            ->join('publishers', 'publishers.publisher_id', '=', 'books.publisher_id')
            ->paginate(config('app.paginate'));

        return view('Admin.book.index', compact('listBooks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $categories= $this->category->all();
        $publishers = $this->publisher->all();
        $authors = $this->author->all();

        return view('Admin.book.create', compact('authors', 'publishers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = $this->book->create([
            'publisher_id' => request('publisher_id'),
            'name' => request('name'),
            'description' => request('description'),
            'quantity' => request('quantity'),
            'status' => request('status'),
            'author_id' => request('author_id'),
        ]);
        if ($book) {
            return redirect()->route('books.index')->with(
                'message',
                ['msg' => trans('create_books_success'), 'status' => 'success']
            );
        }
        return redirect()->route('books.index')->with(
            'message',
            ['msg' => trans('create_books_error'), 'status' => 'danger']
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $book = $this->book->find($id);
            $authors = $this->author->all();
            $publishers = $this->publisher->all();

            return view('Admin.book.edit', compact('book', 'authors', 'publishers'));
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $listBook = $request->all();
        $books = $book->update($listBook);
        if (!$books) {
            return redirect()->route('books.index')->with(
                'success',
                trans('update_book_success')
            );
        }
        return redirect()->route('books.index')->with(
            'danger',
            trans('update_book_error')
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $book = $this->book->delete($id);
            if (!$book) {
                return redirect()->route('books.index')->with(
                    'success',
                    trans('delete_book_success')
                );
            }
            return redirect()->route('books.index')->with(
                'danger',
                trans('delete_book_error')
            );
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
}
