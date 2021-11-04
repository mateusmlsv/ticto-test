<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePoint;
use App\Services\PointService;

class PointController extends Controller
{
    private $pointService;

    public function __construct(PointService $pointService)
    {
        $this->pointService = $pointService;
    }

    public function index()
    {
        $points = $this->pointService->index();

        return view('func.points.index', compact('points'));
    }

    public function create()
    {
        return view('func.points.create');
    }

    public function store(StoreUpdatePoint $request)
    {
        return $this->pointService->create($request->all());
    }

    public function edit($id)
    {
        if (!$points = $this->pointService->find($id)) {
            return redirect()->back();
        }
        return view('func.points.edit', compact('points'));
    }

    public function update(StoreUpdatePoint $request, $id)
    {
        if (!$this->pointService->update($id, $request->all())) {
            return redirect()->back();
        }

        return redirect()
            ->route('points.index')
            ->with('message', 'Point updated successfully');
    }

    public function show($id)
    {
        if (!$point = $this->pointService->find($id)) {
            return redirect()->back();
        }
        return view('func.points.show', compact('point'));
    }

    public function destroy($id)
    {
        if (!$this->pointService->destroy($id)) {
            return redirect()->back();
        }

        return redirect()
            ->route('points.index')
            ->with('message', 'Point deleted successfully');
    }
}
