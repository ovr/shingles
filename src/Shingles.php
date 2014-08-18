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

    /**
     * @param $content
     * @return array
     */
    public function canonize($content)
    {
        $text = str_replace($this->stopSymbols, '', $content);

        $text = strtolower($text);

        return explode(' ', $text);
    }

    public function splitShingles()
    {

    }

    /**
     * @param string $shingle
     * @return mixed
     */
    abstract public function makeHash($shingle);

    public function compare($content1, $content2)
    {
        $shingles1 = $this->splitShingles($this->canonize($content1));
        $shingles2 = $this->splitShingles($this->canonize($content2));
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
