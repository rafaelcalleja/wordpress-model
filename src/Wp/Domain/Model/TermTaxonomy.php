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
 * TermTaxonomy.
 */
class TermTaxonomy
{
    /**
     * @var int
     */
    private $termTaxonomyId;

    /**
     * @var int
     */
    private $termId = '0';

    /**
     * @var string
     */
    private $taxonomy = '';

    /**
     * @var string
     */
    private $description;

    /**
     * @var int
     */
    private $parent = '0';

    /**
     * @var int
     */
    private $count = '0';

    /**
     * Get termTaxonomyId.
     *
     * @return int
     */
    public function getTermTaxonomyId()
    {
        return $this->termTaxonomyId;
    }

    /**
     * Set termId.
     *
     * @param int $termId
     *
     * @return TermTaxonomy
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
     * Set taxonomy.
     *
     * @param string $taxonomy
     *
     * @return TermTaxonomy
     */
    public function setTaxonomy($taxonomy)
    {
        $this->taxonomy = $taxonomy;

        return $this;
    }

    /**
     * Get taxonomy.
     *
     * @return string
     */
    public function getTaxonomy()
    {
        return $this->taxonomy;
    }

    /**
     * Set description.
     *
     * @param string $description
     *
     * @return TermTaxonomy
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set parent.
     *
     * @param int $parent
     *
     * @return TermTaxonomy
     */
    public function setParent($parent)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent.
     *
     * @return int
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set count.
     *
     * @param int $count
     *
     * @return TermTaxonomy
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Get count.
     *
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }
}
