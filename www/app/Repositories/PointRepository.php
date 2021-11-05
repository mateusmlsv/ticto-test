<?php

namespace App\Repositories;

use App\Models\Point;

class PointRepository
{
    private $point;

    public function __construct(Point $point)
    {
        $this->point = $point;
    }

    public function all()
    {
        return $this->point->latest()->paginate();
    }

    public function userOnly($userId)
    {
        return $this->point->where('user_id', $userId)->latest()->paginate();
    }

    public function find($id)
    {
        return $this->point->find($id);
    }

    public function create($data)
    {
        return $this->point->create($data);
    }
}
