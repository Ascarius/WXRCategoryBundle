<?php

namespace WXR\CategoryBundle\Model;

interface TagInterface
{
    /**
     * Get id
     *
     * @return integer
     */
    public function getId();

    /**
     * Set name
     *
     * @param string $name
     * @return TagInterface
     */
    public function setName($name);

    /**
     * Get name
     *
     * @return string
     */
    public function getName();

    /**
     * Set slug
     *
     * @param string $slug
     * @return TagInterface
     */
    public function setSlug($slug);

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug();

    /**
     * Set created at
     *
     * @param \DateTime $createdAt
     * @return TagInterface
     */
    public function setCreatedAt(\DateTime $createdAt);

    /**
     * Get created at
     *
     * @return \DateTime
     */
    public function getCreatedAt();

    /**
     * Set updated at
     *
     * @param \DateTime $updatedAt
     * @return TagInterface
     */
    public function setUpdatedAt(\DateTime $updatedAt);

    /**
     * Get updated at
     *
     * @return \DateTime
     */
    public function getUpdatedAt();

    /**
     * @return string
     */
    public function __toString();
}
