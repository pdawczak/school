<?php

namespace School;


class GroupRepository
{
    private $groups;

    public function __construct(array $groups)
    {
        $this->groups = $groups;
    }

    public function find($id)
    {
        foreach ($this->groups as $group) {
            if ($group->getId() == $id) {
                return $group;
            }
        }

        return null;
    }

    public function persist(Group $group)
    {
        return true;
    }
}
