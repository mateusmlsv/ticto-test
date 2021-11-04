<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePoint;
use App\Models\Point;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PointController extends Controller
{
    public function index()
    {
        $points = Point::latest()->paginate();

        return view('func.points.index', compact('points'));
    }

    public function create()
    {
        return view('func.points.create');
    }

    public function store(StoreUpdatePoint $request)
    {
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;

        Point::create($data);

        return redirect()
            ->route('points.index')
            ->with('message', 'Point successfully registered');
    }
}
