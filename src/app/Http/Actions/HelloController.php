<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    /**
     * メンバー作成.
     *
     * @param Request $request
     * @return void
     */
    public function create(Request $request) {
        $member = [
            'name' => 'ムカサ',
        ];

        return response()->json($member);
    }
}
