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
 * Options.
 */
class Options
{
    /**
     * @var int
     */
    private $optionId;

    /**
     * @var string
     */
    private $optionName = '';

    /**
     * @var string
     */
    private $optionValue;

    /**
     * @var string
     */
    private $autoload = 'yes';

    /**
     * Get optionId.
     *
     * @return int
     */
    public function getOptionId()
    {
        return $this->optionId;
    }

    /**
     * Set optionName.
     *
     * @param string $optionName
     *
     * @return Options
     */
    public function setOptionName($optionName)
    {
        $this->optionName = $optionName;

        return $this;
    }

    /**
     * Get optionName.
     *
     * @return string
     */
    public function getOptionName()
    {
        return $this->optionName;
    }

    /**
     * Set optionValue.
     *
     * @param string $optionValue
     *
     * @return Options
     */
    public function setOptionValue($optionValue)
    {
        $this->optionValue = $optionValue;

        return $this;
    }

    /**
     * Get optionValue.
     *
     * @return string
     */
    public function getOptionValue()
    {
        return $this->optionValue;
    }

    /**
     * Set autoload.
     *
     * @param string $autoload
     *
     * @return Options
     */
    public function setAutoload($autoload)
    {
        $this->autoload = $autoload;

        return $this;
    }

    /**
     * Get autoload.
     *
     * @return string
     */
    public function getAutoload()
    {
        return $this->autoload;
    }
}
