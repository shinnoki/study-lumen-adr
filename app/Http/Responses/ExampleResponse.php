<?php

namespace App\Http\Responses;

use Illuminate\Contracts\Support\Responsable;

class ExampleResponse implements Responsable
{
    public function toResponse($request)
    {
        $content = 'This is '.get_called_class();

        return response($content);
    }
}