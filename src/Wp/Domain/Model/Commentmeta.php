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
 * Commentmeta.
 */
class Commentmeta
{
    /**
     * @var int
     */
    private $metaId;

    /**
     * @var int
     */
    private $commentId = '0';

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
     * Set commentId.
     *
     * @param int $commentId
     *
     * @return Commentmeta
     */
    public function setCommentId($commentId)
    {
        $this->commentId = $commentId;

        return $this;
    }

    /**
     * Get commentId.
     *
     * @return int
     */
    public function getCommentId()
    {
        return $this->commentId;
    }

    /**
     * Set metaKey.
     *
     * @param string $metaKey
     *
     * @return Commentmeta
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
     * @return Commentmeta
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
