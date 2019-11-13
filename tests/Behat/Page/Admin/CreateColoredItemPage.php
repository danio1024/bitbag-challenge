<?php

declare(strict_types=1);

namespace App\Tests\Behat\Page\Admin;

use FriendsOfBehat\PageObjectExtension\Page\SymfonyPage;

final class CreateColoredItemPage extends SymfonyPage
{
    public function getRouteName(): string
    {
        return 'sylius_admin_product_create_simple';
    }
}
