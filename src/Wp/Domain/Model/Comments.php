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
 * Comments.
 */
class Comments
{
    /**
     * @var int
     */
    private $commentId;

    /**
     * @var int
     */
    private $commentPostId = '0';

    /**
     * @var string
     */
    private $commentAuthor;

    /**
     * @var string
     */
    private $commentAuthorEmail = '';

    /**
     * @var string
     */
    private $commentAuthorUrl = '';

    /**
     * @var string
     */
    private $commentAuthorIp = '';

    /**
     * @var \DateTime
     */
    private $commentDate = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     */
    private $commentDateGmt = '0000-00-00 00:00:00';

    /**
     * @var string
     */
    private $commentContent;

    /**
     * @var int
     */
    private $commentKarma = '0';

    /**
     * @var string
     */
    private $commentApproved = '1';

    /**
     * @var string
     */
    private $commentAgent = '';

    /**
     * @var string
     */
    private $commentType = '';

    /**
     * @var int
     */
    private $commentParent = '0';

    /**
     * @var int
     */
    private $userId = '0';

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
     * Set commentPostId.
     *
     * @param int $commentPostId
     *
     * @return Comments
     */
    public function setCommentPostId($commentPostId)
    {
        $this->commentPostId = $commentPostId;

        return $this;
    }

    /**
     * Get commentPostId.
     *
     * @return int
     */
    public function getCommentPostId()
    {
        return $this->commentPostId;
    }

    /**
     * Set commentAuthor.
     *
     * @param string $commentAuthor
     *
     * @return Comments
     */
    public function setCommentAuthor($commentAuthor)
    {
        $this->commentAuthor = $commentAuthor;

        return $this;
    }

    /**
     * Get commentAuthor.
     *
     * @return string
     */
    public function getCommentAuthor()
    {
        return $this->commentAuthor;
    }

    /**
     * Set commentAuthorEmail.
     *
     * @param string $commentAuthorEmail
     *
     * @return Comments
     */
    public function setCommentAuthorEmail($commentAuthorEmail)
    {
        $this->commentAuthorEmail = $commentAuthorEmail;

        return $this;
    }

    /**
     * Get commentAuthorEmail.
     *
     * @return string
     */
    public function getCommentAuthorEmail()
    {
        return $this->commentAuthorEmail;
    }

    /**
     * Set commentAuthorUrl.
     *
     * @param string $commentAuthorUrl
     *
     * @return Comments
     */
    public function setCommentAuthorUrl($commentAuthorUrl)
    {
        $this->commentAuthorUrl = $commentAuthorUrl;

        return $this;
    }

    /**
     * Get commentAuthorUrl.
     *
     * @return string
     */
    public function getCommentAuthorUrl()
    {
        return $this->commentAuthorUrl;
    }

    /**
     * Set commentAuthorIp.
     *
     * @param string $commentAuthorIp
     *
     * @return Comments
     */
    public function setCommentAuthorIp($commentAuthorIp)
    {
        $this->commentAuthorIp = $commentAuthorIp;

        return $this;
    }

    /**
     * Get commentAuthorIp.
     *
     * @return string
     */
    public function getCommentAuthorIp()
    {
        return $this->commentAuthorIp;
    }

    /**
     * Set commentDate.
     *
     * @param \DateTime $commentDate
     *
     * @return Comments
     */
    public function setCommentDate($commentDate)
    {
        $this->commentDate = $commentDate;

        return $this;
    }

    /**
     * Get commentDate.
     *
     * @return \DateTime
     */
    public function getCommentDate()
    {
        return $this->commentDate;
    }

    /**
     * Set commentDateGmt.
     *
     * @param \DateTime $commentDateGmt
     *
     * @return Comments
     */
    public function setCommentDateGmt($commentDateGmt)
    {
        $this->commentDateGmt = $commentDateGmt;

        return $this;
    }

    /**
     * Get commentDateGmt.
     *
     * @return \DateTime
     */
    public function getCommentDateGmt()
    {
        return $this->commentDateGmt;
    }

    /**
     * Set commentContent.
     *
     * @param string $commentContent
     *
     * @return Comments
     */
    public function setCommentContent($commentContent)
    {
        $this->commentContent = $commentContent;

        return $this;
    }

    /**
     * Get commentContent.
     *
     * @return string
     */
    public function getCommentContent()
    {
        return $this->commentContent;
    }

    /**
     * Set commentKarma.
     *
     * @param int $commentKarma
     *
     * @return Comments
     */
    public function setCommentKarma($commentKarma)
    {
        $this->commentKarma = $commentKarma;

        return $this;
    }

    /**
     * Get commentKarma.
     *
     * @return int
     */
    public function getCommentKarma()
    {
        return $this->commentKarma;
    }

    /**
     * Set commentApproved.
     *
     * @param string $commentApproved
     *
     * @return Comments
     */
    public function setCommentApproved($commentApproved)
    {
        $this->commentApproved = $commentApproved;

        return $this;
    }

    /**
     * Get commentApproved.
     *
     * @return string
     */
    public function getCommentApproved()
    {
        return $this->commentApproved;
    }

    /**
     * Set commentAgent.
     *
     * @param string $commentAgent
     *
     * @return Comments
     */
    public function setCommentAgent($commentAgent)
    {
        $this->commentAgent = $commentAgent;

        return $this;
    }

    /**
     * Get commentAgent.
     *
     * @return string
     */
    public function getCommentAgent()
    {
        return $this->commentAgent;
    }

    /**
     * Set commentType.
     *
     * @param string $commentType
     *
     * @return Comments
     */
    public function setCommentType($commentType)
    {
        $this->commentType = $commentType;

        return $this;
    }

    /**
     * Get commentType.
     *
     * @return string
     */
    public function getCommentType()
    {
        return $this->commentType;
    }

    /**
     * Set commentParent.
     *
     * @param int $commentParent
     *
     * @return Comments
     */
    public function setCommentParent($commentParent)
    {
        $this->commentParent = $commentParent;

        return $this;
    }

    /**
     * Get commentParent.
     *
     * @return int
     */
    public function getCommentParent()
    {
        return $this->commentParent;
    }

    /**
     * Set userId.
     *
     * @param int $userId
     *
     * @return Comments
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
}
