<?php

namespace App\Http\Controllers;

class TestController
{
    public function show($test)
        {
            $tests = [
                'first' => 'Hello Diego',
                'second' => 'Hello Wink'
            ];

            if (! array_key_exists($test, $tests)) {
                abort(404, 'That is not possible!');
            }

            return view('post', [
                'test' => $tests[$test]
            ]);
        }

}
