<?php

namespace App\Controller\Admin;

use App\Entity\PizzaChef;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class PizzaChefCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return PizzaChef::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title'),
            TextField::new('ingredient'),
            TextField::new('price'),
        ];
    }
}
