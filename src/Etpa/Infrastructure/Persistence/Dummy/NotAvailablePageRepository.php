<?php

namespace Etpa\Infrastructure\Persistence\Dummy;

use Etpa\UseCases\Page\PageRepositoryNotAvailableException;

class NotAvailablePageRepository implements \Etpa\Domain\PageRepository
{
    /**
     * {@inheritDoc}
     */
    public function persist($story)
    {
        throw new PageRepositoryNotAvailableException();
    }

    /**
     * {@inheritDoc}
     */
    public function findAll()
    {
        throw new PageRepositoryNotAvailableException();
    }

    /**
     * {@inheritDoc}
     */
    public function find($id)
    {
        throw new PageRepositoryNotAvailableException();
    }
}
