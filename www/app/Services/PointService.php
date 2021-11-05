<?php

namespace App\Services;

use App\Repositories\PointRepository;
use Illuminate\Support\Facades\Auth;

class PointService
{
    private $pointRepository;

    public function __construct(PointRepository $pointRepository)
    {
        $this->pointRepository = $pointRepository;
    }

    public function index()
    {
        if (!Auth::user()->admin) {
            return $this->pointRepository->userOnly(Auth::user()->id);
        }
        return $this->pointRepository->all();
    }

    public function create($data)
    {
        $data['user_id'] = Auth::user()->id;

        $this->pointRepository->create($data);

        return redirect()
            ->route('points.index')
            ->with('message', 'Point successfully registered');
    }

    public function find($id)
    {
        return $this->pointRepository->find($id);
    }

    public function update($id, $data)
    {
        if (!$point = $this->find($id)) {
            return false;
        }
        return $point->update($data);
    }

    public function destroy($id)
    {
        if (!$point = $this->find($id)) {
            return false;
        }
        return $point->delete();
    }
}
