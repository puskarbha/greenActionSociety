<?php
    namespace App\Interfaces;
    use App\Models\Project;

use Illuminate\Pagination\LengthAwarePaginator;


interface ProjectRepositoryInterface
    {
        public function all():LengthAwarePaginator;
        public function find($id): ?Project;
        public function create(array $data): Project;

    }
?>
