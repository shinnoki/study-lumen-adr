<?php

namespace App\Http\Actions;

use App\Http\Responses\ExampleResponse;
use Illuminate\Http\Request;

class ExampleAction
{
    public function __invoke(Request $request) {
        return new ExampleResponse();
    }
}