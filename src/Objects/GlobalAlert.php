<?php


namespace Destiny\ClientBundle\Objects;


use Destiny\ClientBundle\Enums\GlobalAlertLevel;
use Destiny\ClientBundle\Enums\GlobalAlertType;

/**
 * Class GlobalAlert
 * @package Destiny\ClientBundle\Objects
 * 
 * @link https://bungie-net.github.io/multi/schema_GlobalAlert.html#schema_GlobalAlert
 *
 * @property string|null $alertKey
 * @property string|null $alertHtml
 * @property \DateTime|null $alertTimestamp
 * @property string|null $alertLink
 * @property int|null $alertLevel GlobalAlertLevel enum
 * @property int|null $alertType GlobalAlertType enum
 */
class GlobalAlert
{
    /**
     * @return string|null
     */
    public function getAlertKey(): ?string
    {
        return $this->alertKey;
    }

    /**
     * @param string|null $alertKey
     * @return GlobalAlert
     */
    public function setAlertKey(?string $alertKey): GlobalAlert
    {
        $this->alertKey = $alertKey;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAlertHtml(): ?string
    {
        return $this->alertHtml;
    }

    /**
     * @param string|null $alertHtml
     * @return GlobalAlert
     */
    public function setAlertHtml(?string $alertHtml): GlobalAlert
    {
        $this->alertHtml = $alertHtml;
        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getAlertTimestamp(): ?\DateTime
    {
        return $this->alertTimestamp;
    }

    /**
     * @param \DateTime|null $alertTimestamp
     * @return GlobalAlert
     */
    public function setAlertTimestamp(?\DateTime $alertTimestamp): GlobalAlert
    {
        $this->alertTimestamp = $alertTimestamp;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAlertLink(): ?string
    {
        return $this->alertLink;
    }

    /**
     * @param string|null $alertLink
     * @return GlobalAlert
     */
    public function setAlertLink(?string $alertLink): GlobalAlert
    {
        $this->alertLink = $alertLink;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getAlertLevel(): ?int
    {
        return $this->alertLevel;
    }

    /**
     * @param int|null $alertLevel
     * @return GlobalAlert
     */
    public function setAlertLevel(?int $alertLevel): GlobalAlert
    {
        $this->alertLevel = $alertLevel;
        return $this;
    }

    /**
     * @return string
     */
    public function getAlertLevelLabel()
    {
        return GlobalAlertLevel::getLabel($this->getAlertLevel());
    }

    /**
     * @return int|null
     */
    public function getAlertType(): ?int
    {
        return $this->alertType;
    }

    /**
     * @param int|null $alertType
     * @return GlobalAlert
     */
    public function setAlertType(?int $alertType): GlobalAlert
    {
        $this->alertType = $alertType;
        return $this;
    }

    /**
     * @return string
     */
    public function getAlertTypeLabel()
    {
        return GlobalAlertType::getLabel($this->getAlertType());
    }

}