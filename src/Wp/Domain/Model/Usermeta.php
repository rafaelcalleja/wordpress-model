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
 * Usermeta.
 */
class Usermeta
{
    /**
     * @var int
     */
    private $umetaId;

    /**
     * @var int
     */
    private $userId = '0';

    /**
     * @var string
     */
    private $metaKey;

    /**
     * @var string
     */
    private $metaValue;

    /**
     * Get umetaId.
     *
     * @return int
     */
    public function getUmetaId()
    {
        return $this->umetaId;
    }

    /**
     * Set userId.
     *
     * @param int $userId
     *
     * @return Usermeta
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId.
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set metaKey.
     *
     * @param string $metaKey
     *
     * @return Usermeta
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
     * @return Usermeta
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
