<?php

namespace GoldbachConjectureKata\Unit;

use GoldbachConjectureKata\GoldbachSolver;

final class GoldbachSolverTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_returns_the_correct_partition_for_4()
    {
        $solver = new GoldbachSolver();

        $this->assertEquals([2, 2], $solver->partitionOf(4));
    }

    /** @test */
    public function it_returns_the_correct_partition_for_6()
    {
        $solver = new GoldbachSolver();

        $this->assertEquals([3, 3], $solver->partitionOf(6));
    }

    /** @test */
    public function it_returns_the_correct_partition_for_8()
    {
        $solver = new GoldbachSolver();

        $this->assertEquals([3, 5], $solver->partitionOf(8));
    }

    /** @test */
    public function it_returns_the_correct_partition_for_10()
    {
        $solver = new GoldbachSolver();

        $this->assertEquals([3, 7], $solver->partitionOf(10));
    }

    /** @test */
    public function it_returns_the_correct_partition_for_100()
    {
        $solver = new GoldbachSolver();

        $this->assertEquals([3, 97], $solver->partitionOf(100));
    }
}
