<?php

namespace App\Http\Controllers\API;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamsController extends Controller
{
    public function index()
    {
        $team = Team::all();

        return $this->respondWithSuccess($team);
    }
}
