<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePoint;
use App\Models\Point;
use Carbon\Carbon;
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

    public function edit($id)
    {
        if (!$points = Point::find($id)) {
            return redirect()->back();
        }
        $points->entry = Carbon::parse($points->entry)->format('Y-m-d\TH:i');
        $points->exit = $points->exit ? Carbon::parse($points->exit)->format('Y-m-d\TH:i') : null;
        return view('func.points.edit', compact('points'));
    }

    public function update(StoreUpdatePoint $request, $id)
    {
        if (!$point = Point::find($id)) {
            return redirect()->back();
        }

        $point->update($request->all());

        return redirect()
            ->route('points.index')
            ->with('message', 'Point updated successfully');
    }
}
