<?php


namespace Destiny\ClientBundle\Objects;


/**
 * Class GroupMemberResponse
 * @package Destiny\ClientBundle\Objects\Responses
 *
 * @link https://bungie-net.github.io/multi/schema_SearchResultOfGroupMember.html#schema_SearchResultOfGroupMember
 */
class GroupMemberResponse
{
    /**
     * @var GroupMember[]|null
     */
    public $results;

    /**
     * @var int|null
     */
    public $totalResults;

    /**
     * @var bool|null
     */
    public $hasMore;

    /**
     * @var string|null
     */
    public $replacementContinuationToken;

    /**
     * @return GroupMember[]|null
     */
    public function getResults(): ?array
    {
        return $this->results;
    }

    /**
     * @param GroupMember[]|null $results
     * @return GroupMemberResponse
     */
    public function setResults(?array $results): GroupMemberResponse
    {
        $this->results = $results;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getTotalResults(): ?int
    {
        return $this->totalResults;
    }

    /**
     * @param int|null $totalResults
     * @return GroupMemberResponse
     */
    public function setTotalResults(?int $totalResults): GroupMemberResponse
    {
        $this->totalResults = $totalResults;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getHasMore(): ?bool
    {
        return $this->hasMore;
    }

    /**
     * @param bool|null $hasMore
     * @return GroupMemberResponse
     */
    public function setHasMore(?bool $hasMore): GroupMemberResponse
    {
        $this->hasMore = $hasMore;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getReplacementContinuationToken(): ?string
    {
        return $this->replacementContinuationToken;
    }

    /**
     * @param string|null $replacementContinuationToken
     * @return GroupMemberResponse
     */
    public function setReplacementContinuationToken(?string $replacementContinuationToken): GroupMemberResponse
    {
        $this->replacementContinuationToken = $replacementContinuationToken;
        return $this;
    }


}