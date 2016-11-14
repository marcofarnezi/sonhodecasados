<?php
namespace CodeProject\Transformers;

use CodeProject\Entities\Project;
use CodeProject\Entities\User;
use League\Fractal\TransformerAbstract;

class PojectMemberTransformer extends TransformerAbstract
{
    public function transform(User $member)
    {
        return [
            'member_id' => $member->id,
            'member_name' => $member->name  ,
        ];
    }
}