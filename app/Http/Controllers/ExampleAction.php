<?php
/**
 * Created by PhpStorm.
 * User: yudai
 * Date: 2017/11/18
 * Time: 14:48
 */

namespace App\Http\Controllers;

use App\Http\Responses\ExampleResponse;

class ExampleAction extends Controller
{
    public function __invoke() {
        return new ExampleResponse();
    }
}