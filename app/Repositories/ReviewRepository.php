<?php

namespace App\Repositories;
use App\Interfaces\ReviewRepositoryInterface;
use App\Models\Review;

class ReviewRepository implements ReviewRepositoryInterface
{
    public function all():object
    {
        return Review::orderBy('created_at', 'desc')->paginate(5);
    }
    public function create(array $data):Review
    {
        return Review::create($data);
    }
}
?>
