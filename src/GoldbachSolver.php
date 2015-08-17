<?php

namespace GoldbachConjectureKata;

class GoldbachSolver
{
    private static $primes = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97, 101];

    /**
     * @param int $aNumber
     * @return array
     * @throws \Exception
     */
    public function partitionOf($aNumber)
    {
        $i = $j = 0;

        while ((static::$primes[$i] + static::$primes[$j]) < $aNumber) {
            while ((static::$primes[$i] + static::$primes[$j]) < $aNumber) {
                $j++;
            }
            if ((static::$primes[$i] + static::$primes[$j]) == $aNumber) {
                return [static::$primes[$i], static::$primes[$j]];
            }
            $j = ++$i;
        }

        if ((static::$primes[$i] + static::$primes[$j]) == $aNumber) {
            return [static::$primes[$i], static::$primes[$j]];
        }

        throw new \Exception("Could not calculate partition of {$aNumber}");
    }
}
