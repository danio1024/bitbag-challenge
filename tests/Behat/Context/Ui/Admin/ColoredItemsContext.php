<?php

declare(strict_types=1);

namespace App\Tests\Behat\Context\Ui\Admin;

use App\Tests\Behat\Page\CreateColoredItemPage;
use Behat\Behat\Context\Context;

final class ColoredItemsContext implements Context
{
    private $createColoredItemPage;

    public function __construct(CreateColoredItemPage $createColoredItemPage)
    {
        $this->createColoredItemPage = $createColoredItemPage;
    }

    /**
     * @When I go to the product creation page
     */
    public function iGoToTheProductCreationPage(): void
    {
        throw new PendingException();
    }

    /**
     * @When I create a sample product with color "([^"]*)"
     */
    public function createASampleProductWithColor(string $color): void
    {
        throw new PendingException();
    }
}
