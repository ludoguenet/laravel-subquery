<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Support\Facades\DB;

final class SubQueryController extends Controller
{
    public function __invoke()
    {
//        $authors = User::query()
//            ->with('books')
//            ->addSelect([
//                'best_selling_name' => Book::query()
//                    ->select('name')
//                    ->whereColumn('user_id', 'users.id')
//                    ->whereRaw('selling_count = (SELECT MAX(selling_count) FROM books WHERE books.user_id = users.id)')
//            ])
//            ->get();
//
//        $authors = User::query()
//            ->with('books')
//            ->addSelect([
//                'best_selling_name' => Book::query()
//                    ->select('name')
//                    ->whereColumn('user_id', 'users.id')
//                    ->orderByDesc('selling_count')
//                    ->limit(1),
//            ])
//            ->get();
//
//        $bestSellingBooks = Book::query()
//            ->select('user_id', DB::raw('MAX(selling_count) AS best_selling_name'))
//            ->groupBy('user_id');
//
//        $authors = User::query()
//            ->with('books')
//            ->joinSub($bestSellingBooks, 'best_selling_books', function (JoinClause $join) {
//                $join->on('user_id', '=', 'users.id');
//            })
//            ->get();

        return view('welcome', compact('authors'));
    }
}
