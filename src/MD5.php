<?php
/**
 * @author Patsura Dmitry @ovr <talk@dmtry.me>
 */

namespace Shingles;

class MD5 extends Shingles
{
    public function makeHash($shingle)
    {
        return md5($shingle);
    }
}
