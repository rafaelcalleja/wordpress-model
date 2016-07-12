<?php

/*
 * This file is part of the wordpress model package.
 *
 * (c) Rafael Calleja <rafaelcalleja@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Wp\Domain\Model;

/**
 * Termmeta.
 */
class Termmeta
{
    /**
     * @var int
     */
    private $metaId;

    /**
     * @var int
     */
    private $termId = '0';

    /**
     * @var string
     */
    private $metaKey;

    /**
     * @var string
     */
    private $metaValue;

    /**
     * Get metaId.
     *
     * @return int
     */
    public function getMetaId()
    {
        return $this->metaId;
    }

    /**
     * Set termId.
     *
     * @param int $termId
     *
     * @return Termmeta
     */
    public function setTermId($termId)
    {
        $this->termId = $termId;

        return $this;
    }

    /**
     * Get termId.
     *
     * @return int
     */
    public function getTermId()
    {
        return $this->termId;
    }

    /**
     * Set metaKey.
     *
     * @param string $metaKey
     *
     * @return Termmeta
     */
    public function setMetaKey($metaKey)
    {
        $this->metaKey = $metaKey;

        return $this;
    }

    /**
     * Get metaKey.
     *
     * @return string
     */
    public function getMetaKey()
    {
        return $this->metaKey;
    }

    /**
     * Set metaValue.
     *
     * @param string $metaValue
     *
     * @return Termmeta
     */
    public function setMetaValue($metaValue)
    {
        $this->metaValue = $metaValue;

        return $this;
    }

    /**
     * Get metaValue.
     *
     * @return string
     */
    public function getMetaValue()
    {
        return $this->metaValue;
    }
}
