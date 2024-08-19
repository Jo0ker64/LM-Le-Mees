<?php

namespace App\Controller\Admin;

use App\Entity\Gourmandises;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class GourmandisesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Gourmandises::class;
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
