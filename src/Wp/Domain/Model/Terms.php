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
 * Terms.
 */
class Terms
{
    /**
     * @var int
     */
    private $termId;

    /**
     * @var string
     */
    private $name = '';

    /**
     * @var string
     */
    private $slug = '';

    /**
     * @var int
     */
    private $termGroup = '0';

    /**
     * @var int
     */
    private $termOrder = '0';

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
     * Set name.
     *
     * @param string $name
     *
     * @return Terms
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set slug.
     *
     * @param string $slug
     *
     * @return Terms
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug.
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set termGroup.
     *
     * @param int $termGroup
     *
     * @return Terms
     */
    public function setTermGroup($termGroup)
    {
        $this->termGroup = $termGroup;

        return $this;
    }

    /**
     * Get termGroup.
     *
     * @return int
     */
    public function getTermGroup()
    {
        return $this->termGroup;
    }

    /**
     * Set termOrder.
     *
     * @param int $termOrder
     *
     * @return Terms
     */
    public function setTermOrder($termOrder)
    {
        $this->termOrder = $termOrder;

        return $this;
    }

    /**
     * Get termOrder.
     *
     * @return int
     */
    public function getTermOrder()
    {
        return $this->termOrder;
    }
}
