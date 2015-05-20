<?php

namespace School;


class PupilRepository
{
    private $pupils;

    public function __construct(array $pupils)
    {
        $this->pupils = $pupils;
    }

    public function find($id)
    {
        foreach ($this->pupils as $pupil) {
            if ($pupil->getId() == $id) {
                return $pupil;
            }
        }

        return null;
    }
}
