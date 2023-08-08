<?php
    namespace App\Repositories;
    use App\Interfaces\ProjectRepositoryInterface;
use App\Models\Project;
use Illuminate\Pagination\LengthAwarePaginator;

class ProjectRepository implements  ProjectRepositoryInterface
    {
    public function all($perPage = 5): LengthAwarePaginator
    {
        return Project::orderBy('created_at', 'desc')->paginate($perPage);
    }

        public function find($id): ?Project
        {
            return Project::find($id);
        }
        public function create(array $data): Project
        {

            return Project::create($data);
        }
    }
?>
