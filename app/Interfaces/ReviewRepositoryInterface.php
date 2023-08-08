<?php
    namespace App\Interfaces;
    use App\Models\Review;

    interface ReviewRepositoryInterface
    {
        public function all():object;
        public function create(array $data):Review;
    }
?>
