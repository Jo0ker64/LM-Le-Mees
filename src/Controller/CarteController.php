<?php

namespace App\Controller;

use App\Entity\Formules;
use App\Entity\Gourmandises;
use App\Entity\PizzaChef;
use App\Entity\PizzaCreme;
use App\Entity\PizzaTomate;
use App\Entity\SaladeBar;
use App\Entity\Snacking;
use App\Form\FormulesType;
use App\Form\GourmandisesType;
use App\Form\PizzaChefType;
use App\Form\PizzaCremeType;
use App\Form\PizzaTomateType;
use App\Form\SaladeBarType;
use App\Form\SnackingType;
use App\Repository\FormulesRepository;
use App\Repository\GourmandisesRepository;
use App\Repository\PizzaChefRepository;
use App\Repository\PizzaCremeRepository;
use App\Repository\PizzaTomateRepository;
use App\Repository\SaladeBarRepository;
use App\Repository\SnackingRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/carte', name: 'app_carte')]
class CarteController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/', name: '_index')]
    public function index(
        FormulesRepository $formulesRepository,
        GourmandisesRepository $gourmandisesRepository,
        PizzaChefRepository $pizzaChefRepository,
        PizzaCremeRepository $pizzaCremeRepository,
        PizzaTomateRepository $pizzaTomateRepository,
        SaladeBarRepository $saladeBarRepository,
        SnackingRepository $snackingRepository
    ): Response {
        return $this->render('carte/index.html.twig', [
            'formules' => $formulesRepository->findAll(),
            'gourmandises' => $gourmandisesRepository->findAll(),
            'pizzaChefs' => $pizzaChefRepository->findAll(),
            'pizzaCremes' => $pizzaCremeRepository->findAll(),
            'pizzaTomates' => $pizzaTomateRepository->findAll(),
            'saladeBars' => $saladeBarRepository->findAll(),
            'snackings' => $snackingRepository->findAll(),
        ]);
    }

    #[Route('/formules', name: '_formules_index')]
    public function formulesIndex(FormulesRepository $repository): Response
    {
        $items = $repository->findAll();

        return $this->render('carte/index.html.twig', [
            'items' => $items,
            'type' => 'Formules'
        ]);
    }

    #[Route('/Gourmandises', name: '_Gourmandises_index')]
    public function GourmandisesIndex(GourmandisesRepository $repository): Response
    {
        $items = $repository->findAll();

        return $this->render('carte/index.html.twig', [
            'items' => $items,
            'type' => 'Gourmandises'
        ]);
    }

    #[Route('/pizza-chef', name: '_pizza_chef_index')]
    public function pizzaChefIndex(PizzaChefRepository $repository): Response
    {
        $items = $repository->findAll();

        return $this->render('carte/index.html.twig', [
            'items' => $items,
            'type' => 'PizzaChef'
        ]);
    }

    #[Route('/pizza-creme', name: '_pizza_creme_index')]
    public function pizzaCremeIndex(PizzaCremeRepository $repository): Response
    {
        $items = $repository->findAll();

        return $this->render('carte/index.html.twig', [
            'items' => $items,
            'type' => 'PizzaCreme'
        ]);
    }

    #[Route('/pizza-tomate', name: '_pizza_tomate_index')]
    public function pizzaTomateIndex(PizzaTomateRepository $repository): Response
    {
        $items = $repository->findAll();

        return $this->render('carte/index.html.twig', [
            'items' => $items,
            'type' => 'PizzaTomate'
        ]);
    }

    #[Route('/salade-bar', name: '_salade_bar_index')]
    public function saladeBarIndex(SaladeBarRepository $repository): Response
    {
        $items = $repository->findAll();

        return $this->render('carte/index.html.twig', [
            'items' => $items,
            'type' => 'SaladeBar'
        ]);
    }

    #[Route('/snacking', name: '_snacking_index')]
    public function snackingIndex(SnackingRepository $repository): Response
    {
        $items = $repository->findAll();

        return $this->render('carte/index.html.twig', [
            'items' => $items,
            'type' => 'Snacking'
        ]);
    }

    // New actions
    #[Route('/formules/new', name: '_formules_new')]
    public function formulesNew(Request $request): Response
    {
        $item = new Formules();
        $form = $this->createForm(FormulesType::class, $item);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($item);
            $this->entityManager->flush();

            return $this->redirectToRoute('app_carte_formules_index');
        }

        return $this->render('carte/new.html.twig', [
            'form' => $form->createView(),
            'type' => 'Formules'
        ]);
    }

    #[Route('/Gourmandises/new', name: '_Gourmandises_new')]
    public function GourmandisesNew(Request $request): Response
    {
        $item = new Gourmandises();
        $form = $this->createForm(GourmandisesType::class, $item);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($item);
            $this->entityManager->flush();

            return $this->redirectToRoute('app_carte_Gourmandises_index');
        }

        return $this->render('carte/new.html.twig', [
            'form' => $form->createView(),
            'type' => 'Gourmandises'
        ]);
    }

    #[Route('/pizza-chef/new', name: '_pizza_chef_new')]
    public function pizzaChefNew(Request $request): Response
    {
        $item = new PizzaChef();
        $form = $this->createForm(PizzaChefType::class, $item);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($item);
            $this->entityManager->flush();

            return $this->redirectToRoute('app_carte_pizza_chef_index');
        }

        return $this->render('carte/new.html.twig', [
            'form' => $form->createView(),
            'type' => 'PizzaChef'
        ]);
    }

    #[Route('/pizza-creme/new', name: '_pizza_creme_new')]
    public function pizzaCremeNew(Request $request): Response
    {
        $item = new PizzaCreme();
        $form = $this->createForm(PizzaCremeType::class, $item);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($item);
            $this->entityManager->flush();

            return $this->redirectToRoute('app_carte_pizza_creme_index');
        }

        return $this->render('carte/new.html.twig', [
            'form' => $form->createView(),
            'type' => 'PizzaCreme'
        ]);
    }

    #[Route('/pizza-tomate/new', name: '_pizza_tomate_new')]
    public function pizzaTomateNew(Request $request): Response
    {
        $item = new PizzaTomate();
        $form = $this->createForm(PizzaTomateType::class, $item);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($item);
            $this->entityManager->flush();

            return $this->redirectToRoute('app_carte_pizza_tomate_index');
        }

        return $this->render('carte/new.html.twig', [
            'form' => $form->createView(),
            'type' => 'PizzaTomate'
        ]);
    }

    #[Route('/salade-bar/new', name: '_salade_bar_new')]
    public function saladeBarNew(Request $request): Response
    {
        $item = new SaladeBar();
        $form = $this->createForm(SaladeBarType::class, $item);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($item);
            $this->entityManager->flush();

            return $this->redirectToRoute('app_carte_salade_bar_index');
        }

        return $this->render('carte/new.html.twig', [
            'form' => $form->createView(),
            'type' => 'SaladeBar'
        ]);
    }

    #[Route('/snacking/new', name: '_snacking_new')]
    public function snackingNew(Request $request): Response
    {
        $item = new Snacking();
        $form = $this->createForm(SnackingType::class, $item);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($item);
            $this->entityManager->flush();

            return $this->redirectToRoute('app_carte_snacking_index');
        }

        return $this->render('carte/new.html.twig', [
            'form' => $form->createView(),
            'type' => 'Snacking'
        ]);
    }

    // Ajoutez les actions d'édition, de suppression et de visualisation des détails de manière similaire
}
