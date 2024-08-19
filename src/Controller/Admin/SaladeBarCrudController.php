<?php

namespace App\Controller\Admin;

use App\Entity\SaladeBar;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class SaladeBarCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return SaladeBar::class;
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
