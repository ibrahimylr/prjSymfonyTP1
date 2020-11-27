<?php

namespace App\Controller;

use App\Entity\Lesson;
use App\Form\LessonType;
use App\Repository\LessonRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LessonController extends AbstractController
{
    /**
     * @Route("/admin/lesson", name="lesson")
     */
    public function index(LessonRepository $lessonRepository): Response
    {
        return $this->render('admin/lesson/index.html.twig', [
            'controller_name' => 'LessonController',
            'lessons' => $lessonRepository->findAll()
        ]);
    }

    /**
     * @Route("/admin/lesson/add", name="lesson_add")
     */
    public function add(Request $request, EntityManagerInterface $entityManager): Response
    {
        $lesson = (new Lesson())
            ->setStartAt(new \DateTimeImmutable())
            ->setEndAt(new \DateTimeImmutable());
        $form = $this->getForm($lesson);
        if ($this->saveForm($request, $form))
        {
            return $this->redirectToRoute('lesson');
        }

        return $this->render('admin/lesson/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/lesson/edit/{slug}", name="lesson_edit")
     */
    public function edit(Request $request, Lesson $lesson): Response
    {
        $form = $this->getForm($lesson);
        if ($this->saveForm($request, $form))
        {
            return $this->redirectToRoute('lesson');
        }

        return $this->render('admin/lesson/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/lesson/delete/{slug}", name="lesson_delete")
     */
    public function delete(Lesson $lesson): Response
    {
        $manager = $this->getDoctrine()->getManager();

        $manager->remove($lesson);
        $manager->flush();

        return $this->redirectToRoute('lesson');
    }

    public function getForm(Lesson $lesson): FormInterface
    {
        return $this->createForm(LessonType::class, $lesson)
            ->add('startAt', DateType::class, [
                'widget' => 'single_text'
            ])
            ->add('endAt', DateType::class, [
                'widget' => 'single_text'
            ]);
    }

    public function saveForm(Request $request, FormInterface $form): bool
    {
        $manager = $this->getDoctrine()->getManager();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $manager->persist($data);
            $manager->flush();
            return true;
        }

        return false;
    }
}
