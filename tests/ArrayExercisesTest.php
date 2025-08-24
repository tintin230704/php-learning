<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/ArrayExercises.php';

class ArrayExercisesTest extends TestCase {

    public function testCompareArray() {
        $this->assertTrue(ArrayExercises::compareArray([1, 2, 3], [1, 2, 3]));
        $this->assertFalse(ArrayExercises::compareArray([1, 2], [1, 2, 3]));
        $this->assertFalse(ArrayExercises::compareArray([1, 2, 3], [3, 2, 1]));
    }

    public function testReverseArray() {
        $this->assertEquals([4, 3, 2, 1], ArrayExercises::reverseArray([1, 2, 3, 4]));
    }

    public function testSumNumbersAtOddIndex() {
        $this->assertEquals(6, ArrayExercises::sumNumbersAtOddIndex([1, 2, 3, 4]));
        $this->assertEquals(0, ArrayExercises::sumNumbersAtOddIndex([]));
    }

    public function testAddArrays() {
        $a = [
            [1, 2],
            [3, 4]
        ];
        $b = [
            [5, 6],
            [7, 8]
        ];
        $expected = [
            [6, 8],
            [10, 12]
        ];
        $this->assertEquals($expected, ArrayExercises::addArrays($a, $b));
    }

    public function testSumOddLines() {
        $array = [
            [1, 2],
            [3, 4],
            [5, 6]
        ];
        $this->assertEquals(7, ArrayExercises::sumOddLines($array));
    }

    public function testSumDiagonalNumbers() {
        $array = [
            [1, 0, 0],
            [0, 2, 0],
            [0, 0, 3]
        ];
        $this->assertEquals(6, ArrayExercises::sumDiagonalNumbers($array));
    }

    public function testSumBordersNumbers() {
        $array = [
            [1, 2, 3],
            [4, 5, 6],
            [7, 8, 9]
        ];
        // 1+2+3+7+8+9 (bords horizontaux) + 4+6 (bords verticaux internes)
        $this->assertEquals(40, ArrayExercises::sumBordersNumbers($array));
    }

    public function testWordSearchFoundVertical() {
        $array = [
            ['e', 'f', 'b', 'l', 'p'],
            ['a', 'm', 'J', 'c', 'i'],
            ['i', 'v', 'A', 'k', 'p'],
            ['b', 'w', 'V', 's', 'q'],
            ['l', 'n', 'A', 'm', 'o']
        ];
        $expected = [[1, 2], [4, 2]]; // "JAVA" vertical
        $this->assertEquals($expected, ArrayExercises::wordSearch($array, "JAVA"));
    }

    public function testWordSearchNotFound() {
        $array = [
            ['a', 'b', 'c'],
            ['d', 'e', 'f'],
            ['g', 'h', 'i']
        ];
        $this->assertEquals([[-1, -1], [-1, -1]], ArrayExercises::wordSearch($array, "xyz"));
    }
}