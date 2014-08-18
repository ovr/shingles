<?php
/**
 * @author Patsura Dmitry @ovr <talk@dmtry.me>
 */

namespace Shingles;

abstract class Shingles
{
    protected $stopSymbols = [];

    protected $shinglesCount;

    public function __construct($shinglesCount = 3)
    {
        $this->shinglesCount = $shinglesCount;
    }

    public function canonize()
    {

    }

    public function splitShingles()
    {

    }

    /**
     * @param string $shingle
     * @return mixed
     */
    abstract public function makeHash($shingle);

    public function compare()
    {

    }

    /**
     * @return array
     */
    public function getStopSymbols()
    {
        return $this->stopSymbols;
    }

    /**
     * @param array $stopSymbols
     */
    public function addStopSymbols(array $stopSymbols)
    {
        $this->stopSymbols = $stopSymbols;
    }
}
