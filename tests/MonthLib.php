<?php

require_once '../monthlib.php';

use PHPUnit\Framework\TestCase;


class MonthLib extends TestCase
{
    // Every method in a test file must have the prefix 'test'

    public function testNameOfMonth_Given1ReturnJanuary()
    {
        // Arrange
        $expected = 'January';
        $month = 1;

        // Act
        $result = nameOfMonth($month);

        // Assert - compare the expected result to the actual result
        $this->assertEquals($expected, $result);
    }

    public function testNameOfMonth_Given12ReturnDecember()
    {
        // Arrange
        $expected = 'December';
        $month = 12;

        // Act
        $result = nameOfMonth($month);

        // Assert - compare the expected result to the actual result
        $this->assertEquals($expected, $result);
    }
}