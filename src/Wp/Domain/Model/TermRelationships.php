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
 * TermRelationships.
 */
class TermRelationships
{
    /**
     * @var int
     */
    private $objectId = '0';

    /**
     * @var int
     */
    private $termTaxonomyId = '0';

    /**
     * @var int
     */
    private $termOrder = '0';

    /**
     * Set objectId.
     *
     * @param int $objectId
     *
     * @return TermRelationships
     */
    public function setObjectId($objectId)
    {
        $this->objectId = $objectId;

        return $this;
    }

    /**
     * Get objectId.
     *
     * @return int
     */
    public function getObjectId()
    {
        return $this->objectId;
    }

    /**
     * Set termTaxonomyId.
     *
     * @param int $termTaxonomyId
     *
     * @return TermRelationships
     */
    public function setTermTaxonomyId($termTaxonomyId)
    {
        $this->termTaxonomyId = $termTaxonomyId;

        return $this;
    }

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
     * Set termOrder.
     *
     * @param int $termOrder
     *
     * @return TermRelationships
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
