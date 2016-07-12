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
 * Postmeta.
 */
class Postmeta
{
    /**
     * @var int
     */
    private $metaId;

    /**
     * @var int
     */
    private $postId = '0';

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
     * Set postId.
     *
     * @param int $postId
     *
     * @return Postmeta
     */
    public function setPostId($postId)
    {
        $this->postId = $postId;

        return $this;
    }

    /**
     * Get postId.
     *
     * @return int
     */
    public function getPostId()
    {
        return $this->postId;
    }

    /**
     * Set metaKey.
     *
     * @param string $metaKey
     *
     * @return Postmeta
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
     * @return Postmeta
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
