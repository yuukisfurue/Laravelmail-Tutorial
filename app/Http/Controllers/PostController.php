<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Request $request) {
        $posts = Post::search()->paginate(10);
        $search_params = $request->only([
            'name',
            'zip_code',
            'prefecture',
            'city',
            'address'
        ]);

        return view('index', [
            'posts' => $posts,
            'search_params' => $search_params
        ]);
    }

    public function csvDownload() {
        $posts = Post::search()->get();

        $headers = [
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename=file.csv"
        ];

        $callback = function() use($posts) {
            $handle = fopen('php://output', 'w');

            $columns = [
                'id',
                'name',
                'zip_code',
                'prefecture',
                'city',
                'address'
            ];

            mb_convert_variables('SJIS-win', 'UTF-8', $columns);

            fputcsv($handle, $columns);

            foreach($posts as $post) {
                $csv = [
                    $post->id,
                    $post->name,
                    $post->zip_code,
                    $post->prefecture,
                    $post->city,
                    $post->address
                ];

                mb_convert_variables('SJIS-win', 'UTF-8', $csv);

                fputcsv($handle, $csv);
            }

            fclose($handle);
        };

        return response()->stream($callback, 200, $headers);

    }
}