<?php

namespace App\Controller;

use App\Data\SearchData;
use App\Entity\Humain;
use App\Entity\User;
use App\Form\HumainType;
use App\Form\SearchForm;
use App\Repository\HumainRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;


class ContactUltraMangaController extends AbstractController
{
   

    /**
     * @Route("/home", name="home")
     */
    public function home(HumainRepository $repo,Request $request)
    {
        
        $data = new SearchData();
        $form = $this->createForm(SearchForm::class, $data);
        $form->handleRequest($request);
      //  dd($data);
        $humains = $repo->findSearch($data);

//        $humains = $repo->findAll();
        return $this->render('contact_ultra_manga/home.html.twig', [
            'humains' => $humains,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/ajouter" , name="add")
     */
    public function form(Request $request, EntityManagerInterface $manager)
    {

        $humain = new Humain();

        $form = $this->createForm(HumainType::class, $humain);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($humain);
            $manager->flush();
        }

        return $this->render('contact_ultra_manga/create.html.twig', [
            'formHumain' => $form->createView(),

        ]);
    }

    /**
     * @Route("/edit/{id}", name="edit")
     */
    public function edit(Humain $humain = null, Request $request, EntityManagerInterface $manager)
    {
        if (!$humain) {

            $humain = new Humain();
        }


        $form = $this->createForm(HumainType::class, $humain);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($humain);
            $manager->flush();
        }

        return $this->render('contact_ultra_manga/edit.html.twig', [
            'formHumain' => $form->createView(),
            'humain' => $humain
        ]);
    }

     /**
     * @Route("/delete/{id}", name="delete")
     */
    public function delete(Humain $humain = null, EntityManagerInterface $manager)
    {
    
        if (!$humain) {
            $humain = new Humain();
        }
            
            $manager->remove($humain);
            $manager->flush();

            return $this->redirectToRoute('home');

    }
}
