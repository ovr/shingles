<?php
/**
 * @author Patsura Dmitry @ovr <talk@dmtry.me>
 */

abstract class Shingles
{
    public function __construct()
    {

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
}
