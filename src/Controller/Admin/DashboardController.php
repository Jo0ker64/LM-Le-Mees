<?php

namespace App\Controller\Admin;

use App\Entity\Formules;
use App\Entity\Snacking;
use App\Entity\PizzaChef;
use App\Entity\SaladeBar;
use App\Entity\PizzaCreme;
use App\Entity\PizzaTomate;
use App\Entity\Gourmandises;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Controller\Admin\FormulesCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        $adminUrlGenrator = $this->container->get(AdminUrlGenerator::class);
        return $this->redirect($adminUrlGenrator->setController(FormulesCrudController::class)->generateUrl());
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Mees');
    }

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        // $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        // return $this->redirect($adminUrlGenerator->setController(OneOfYourCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');
    

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToCrud('Formules', 'fa fa-cutlery', Formules::class);
        yield MenuItem::linkToCrud('Gourmandises', 'fa fa-birthday-cake', Gourmandises::class);
        yield MenuItem::linkToCrud('PizzaCreme', 'fas fa-pizza-slice', PizzaCreme::class);
        yield MenuItem::linkToCrud('PizzaChef', 'fas fa-pizza-slice', PizzaChef::class);
        yield MenuItem::linkToCrud('PizzaTomate', 'fas fa-pizza-slice', PizzaTomate::class);
        yield MenuItem::linkToCrud('Salades', 'fas fa-seedling', SaladeBar::class);
        yield MenuItem::linkToCrud('Snacking', 'fas fa-hamburger', Snacking::class);

}
}
