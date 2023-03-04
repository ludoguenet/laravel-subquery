<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Support\Facades\DB;

class SubQueryController extends Controller
{
    public function __invoke()
    {
//        $authors = User::query()
//            ->with(
//                relations: 'books.category'
//            )
//            ->addSelect([
//                'best_sale' => Book::query()
//                    ->selectRaw('MAX(selling_count)')
//                    ->whereColumn('user_id', 'users.id')
//            ])
//            ->get();

//        $authors = User::query()
//            ->with(
//                relations: 'books.category'
//            )
//            ->addSelect([
//                'best_sale' => Book::query()
//                    ->select('name')
//                    ->whereColumn('user_id', 'users.id')
//                    ->whereRaw('selling_count = (SELECT MAX(selling_count) FROM books WHERE user_id = users.id)')
//            ])
//            ->get();

//        $bestSellingBooks = Book::query()
//            ->select('user_id', DB::raw('MAX(selling_count) AS best_sale'))
//            ->groupBy('user_id');

//         $authors = User::query()
////             ->with('books')
//             ->leftJoinSub($bestSellingBooks, 'best_selling_books', function (JoinClause $join) {
//                 $join->on('users.id', '=', 'best_selling_books.user_id');
//             })
//            ->get();

        return view('welcome', compact('authors'));
    }
}
