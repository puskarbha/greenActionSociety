<?php
    namespace App\Interfaces;
    use App\Models\Member;
use Illuminate\Database\Eloquent\Collection;

interface MemberRepositoryInterface{
        public function all(): Collection;
        public function create(array $data):Member;
    }
?>
