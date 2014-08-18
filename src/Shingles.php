<?php
/**
 * @author Patsura Dmitry @ovr <talk@dmtry.me>
 */

namespace Shingles;

abstract class Shingles
{
    /**
     * @var array
     */
    protected $stopSymbols = [];

    /**
     * @var integer
     */
    protected $shinglesCount;

    /**
     * @param int $shinglesCount
     */
    public function __construct($shinglesCount = 3)
    {
        if (!is_int($shinglesCount)) {
            throw new \InvalidArgumentException('$shinglesCount must be int type');
        }

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

        return explode(' ', $content);
    }

    /**
     * @param array $content
     * @return array
     */
    public function splitShingles(array $content)
    {
        $shingles = array();

        for ($i = 0; $i < $this->shinglesCount; $i++) {
            $shingles[] = $this->makeHash($content[$i]);
        }

        return $shingles;
    }

    /**
     * @param string $shingle
     * @return mixed
     */
    abstract public function makeHash($shingle);

    /**
     * @param $content1
     * @param $content2
     * @return float
     */
    public function compare($content1, $content2)
    {
        $shingle1 = $this->splitShingles($this->canonize($content1));
        $shingle2 = $this->splitShingles($this->canonize($content2));

        $diff = array_diff($shingle1, $shingle2);
        $count_shingle = count($shingle1);

        return ($count_shingle-count($diff))/$count_shingle*100;
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
