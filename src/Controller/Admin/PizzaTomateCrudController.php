<?php

namespace App\Controller\Admin;

use App\Entity\PizzaTomate;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class PizzaTomateCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return PizzaTomate::class;
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