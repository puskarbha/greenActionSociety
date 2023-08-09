<?php
namespace App\Repositories;
use App\Interfaces\TeamRepositoryInterface;
use App\Models\Team;
class TeamRepository implements TeamRepositoryInterface{
  public function all():object
    {
        return Team::orderBy('created_at', 'desc')->paginate(5);
    }
}

?>
