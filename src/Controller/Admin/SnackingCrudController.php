<?php

namespace App\Controller\Admin;

use App\Entity\Snacking;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class SnackingCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Snacking::class;
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
