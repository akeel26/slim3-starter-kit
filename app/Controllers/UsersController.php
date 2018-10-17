<?php
namespace App\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;
use Illuminate\Database\Query\Builder;

class UsersController extends Controller {
    protected $table;

    public function __construct(Builder $table) {
        $this->table = $table;
    }

    // sample call to get all users
    public function index(Request $request, Response $response) {
        $users = $this->table->get(); // $this->table->where('first_name', 'like', '%foo%')->get();
        return $users->toJson();
    }
}
