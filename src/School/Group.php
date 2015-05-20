<?php

namespace School;


class Group
{
    private $id;
    private $pupils;

    public function __construct($id, array $pupils = [])
    {
        $this->id = $id;
        $this->pupils = $pupils;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return array
     */
    public function getPupils()
    {
        return $this->pupils;
    }

    /**
     * @param array $pupils
     * @return Group
     */
    public function setPupils($pupils)
    {
        $this->pupils = $pupils;
        return $this;
    }

    /**
     * @param Pupil $pupil
     * @return Group
     */
    public function addPupil(Pupil $pupil)
    {
        $this->pupils[] = $pupil;
        return $this;
    }
}
