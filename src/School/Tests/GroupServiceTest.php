<?php

namespace School\Tests;

require_once 'vendor/autoload.php';


use School\Group;
use School\GroupRepository;
use School\GroupService;
use School\Pupil;
use School\PupilRepository;
use School\TooManyPupilsException;

final class GroupServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var GroupService
     */
    private $SUT;

    protected function setUp()
    {
        parent::setUp();

        $pupil1 = new Pupil(1);
        $pupil2 = new Pupil(2);
        $pupil3 = new Pupil(3);

        $this->SUT = new GroupService(
            new GroupRepository([new Group(1), new Group(2, [$pupil1, $pupil2])]),
            new PupilRepository([$pupil1, $pupil2, $pupil3])
        );
    }

    /**
     * @test
     */
    public function it_should_enlist_pupil_in_group()
    {
        $this->setExpectedException('School\TooManyPupilsException');

        $this->SUT->add(2, 3);
    }
}
