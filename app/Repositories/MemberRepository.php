<?php
    namespace App\Repositories;
    use App\Interfaces\MemberRepositoryInterface;
use App\Models\Member;
use Illuminate\Database\Eloquent\Collection;

class MemberRepository implements MemberRepositoryInterface
    {
        public function all():Collection
        {
            return Member::all();
        }
        public function create(array $data): Member
        {
            return Member::create($data);
        }
    }
?>
