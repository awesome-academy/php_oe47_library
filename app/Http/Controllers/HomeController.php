<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use Books;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    protected $book;
    private $author;
    private $publisher;
    private $category;
    private $subCategories;

    public function __construct(Book $book, Author $author, Publisher $publisher, Category $category)
    {
        $this->book = $book;
        $this->author = $author;
        $this->publisher = $publisher;
        $this->category = $category;
        $this->subCategories =  $this->category->all();
    }

    public function index(Request $request)
    {
        $categories = Category::where('parent_id', '=', '0')->get();
        $subCategories = $this->category->all();

        return view('Home.index')->with(compact('categories', 'subCategories'));
    }

    public function listBook(Request $request)
    {
        $categories = Category::where('parent_id', '=', '0')->get();
        $subCategories = $this->category->all();
        $books = DB::table('books')
            ->join('authors', 'authors.author_id', '=', 'books.author_id')
            ->join('publishers', 'publishers.publisher_id', '=', 'books.publisher_id')
            ->paginate(config('app.paginate_listBook'));

        return view('Home.listBook', compact('books', 'categories', 'subCategories'));
    }

    public function detailBook(Request $request, $id)
    {
        try {
            $books = $this->book->find($id);
            $authors = $this->book->all();
            $publishers = $this->book->all();
            $categories = Category::where('parent_id', '=', '0')->get();
            $subCategories = $this->category->all();

            return view('Home.detailBook', compact('books', 'authors', 'publishers', 'categories', 'subCategories'));
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    public function listBookByCategory($categoryID)
    {
        try {
            $categories = Category::where('id', $categoryID)->get();
            $subCategories = $this->category->all();
            $books = DB::table('books')
                ->join('authors', 'authors.author_id', '=', 'books.author_id')
                ->join('publishers', 'publishers.publisher_id', '=', 'books.publisher_id')
                ->paginate(config('app.paginate_listBook'));
            return view('Home.listCategoryBook', compact('books', 'categories', 'subCategories'));
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    public function showRegistrationForm()
    {
        $categories = Category::where('parent_id', '=', '0')->get();
        $subCategories = Category::all();

        return view('auth.register', compact('categories', 'subCategories'));
    }

    public function showLoginForm()
    {
        $categories = Category::where('parent_id', '=', '0')->get();
        $subCategories = Category::all();
        return view('auth.login', compact('categories', 'subCategories'));
    }
}
