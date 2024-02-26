<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     * For 1 action only
     */
    public function __invoke(Request $request)
    {
        /*$blogs = [
            [
                'title' => "Title one",
                'body' => 'this is a body text',
                'status' => 0
            ],
            [
                'title' => "Title two",
                'body' => 'this is a body text',
                'status' => 0
            ],
            [
                'title' => "Title three",
                'body' => 'this is a body text',
                'status' => 0
            ],
            [
                'title' => "Title four",
                'body' => 'this is a body text',
                'status' => 0
            ]
        ];*/
//        return view('home', compact('blogs'));

        // Pluck for full data for 1 column with primary key
//        return DB::table('posts')
//            ->where('status', 1)
//            ->where('id', '<', 20)
//            ->get();
         /*DB::table('posts')->insert([
             [
                'title' => "Title one",
                'description' => 'this is a body text',
                'status' => 0,
                'publish_date' => date('Y-m-d'),
                'user_id' => 1
            ],
             [
                 'title' => "Title two",
                 'description' => 'this is a body text',
                'status' => 0,
                 'publish_date' => date('Y-m-d'),
                 'user_id' => 2
             ]
            ],
         );*/

        /*DB::table('posts')->where('id',6)->update([
            'title' => "Hey we updated our title the id is 6",
            'description' => 'this is a update description',
          'status' => 0,
        ]);*/

        /*// delete with id only
        DB::table('posts')->where('id', 6)->delete();

        // delete with id only
        DB::table('posts')->delete(6);

        // delete everything
        DB::table('posts')->delete();*/

        /*return DB::table('posts')
            ->join('categories', 'posts.category_id', '=', 'categories.id')
            ->select('categories.*')
            ->get();*/

        /*
         * count()
         * max()
         * min()
         * avg()
         * sum()
         */
//        dd('success');
        return DB::table('posts')->count('views');
    }
}
