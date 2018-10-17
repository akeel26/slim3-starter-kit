<?php
namespace App\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;

class SampleController extends Controller {

    public function index (Request $request, Response $response) {
        return $response->getBody()->write('SampleController index');
    }
}
