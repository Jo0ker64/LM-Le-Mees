<?php

namespace App\Controller\Admin;

use App\Entity\PizzaChef;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
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
            IdField::new('id')->hideOnForm(),
            TextField::new('title'),
            TextField::new('ingredient'),
            TextField::new('prix'),
        ];
    }
}
