<?php
declare(strict_types=1);

namespace Enm\JsonApi\Model\Resource;

use Enm\JsonApi\Model\Common\CollectionInterface;

/**
 * @author Philipp Marien <marien@eosnewmedia.de>
 */
interface ResourceCollectionInterface extends CollectionInterface
{
    /**
     * @return ResourceInterface[]
     */
    public function all(): array;

    /**
     * @param string $type
     * @param string $id
     *
     * @return bool
     */
    public function has(string $type, string $id): bool;

    /**
     * @param string $type
     * @param string $id
     *
     * @return ResourceInterface
     */
    public function get(string $type, string $id): ResourceInterface;

    /**
     * @param string|null $type
     * @return ResourceInterface
     */
    public function first(?string $type = null): ResourceInterface;

    /**
     * @param ResourceInterface $resource
     *
     * @return ResourceCollectionInterface
     */
    public function set(ResourceInterface $resource): ResourceCollectionInterface;

    /**
     * @param ResourceInterface $resource
     * @param bool $replaceExistingValues
     * @return ResourceCollectionInterface
     */
    public function merge(ResourceInterface $resource, bool $replaceExistingValues = false): ResourceCollectionInterface;

    /**
     * @param string $type
     * @param string $id
     * @return ResourceCollectionInterface
     */
    public function remove(string $type, string $id): ResourceCollectionInterface;

    /**
     * @param ResourceInterface $resource
     *
     * @return ResourceCollectionInterface
     */
    public function removeElement(ResourceInterface $resource): ResourceCollectionInterface;
}
