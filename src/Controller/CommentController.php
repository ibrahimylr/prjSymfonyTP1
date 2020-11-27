<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\Lesson;
use App\Form\CommentType;
use App\Repository\CommentRepository;
use App\Repository\LessonRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\Workflow\WorkflowInterface;

class CommentController extends AbstractController
{
    /**
     * @Route("/admin/comment/{slugLesson}", name="comment")
     * @ParamConverter("lesson", options={ "mapping":{"slugLesson":"slug"} })
     */
    public function index(Lesson $lesson, LessonRepository $lessonRepository, CommentRepository $commentRepository): Response
    {
        return $this->render('admin/comment/index.html.twig', [
            'controller_name' => 'CommentController',
            'lesson' => $lessonRepository->find($lesson),
            'comments' => $commentRepository->findBy(['lesson' => $lesson])
        ]);
    }

    /**
     * @Route("/admin/comment/add/{slugLesson}", name="comment_add")
     * @ParamConverter("lesson", options={ "mapping":{"slugLesson":"slug"} })
     */
    public function add(Lesson $lesson, Request $request, EntityManagerInterface $entityManager): Response
    {
        $comment = new Comment();
        $comment->setLesson($lesson);
        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $entityManager->persist($data);
            $entityManager->flush();
            return $this->redirectToRoute("comment", ['slugLesson' => $lesson->getSlug()]);
        }
        return $this->render('admin/comment/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/comment/{id}/changeState/{transition}", name="comment_changeState")
     */
    public function changeState(Comment $comment, string $transition, LessonRepository $lessonRepository, EntityManagerInterface $entityManager): Response
    {
        $lesson = $lessonRepository->findOneBy(['id' => $comment->getLesson()]);

        $workflow = $this->container->get('workflow.comment');
        if ($workflow->can($comment, $transition))
        {
            $workflow->apply($comment, $transition);
            $entityManager->flush();
        }

        return $this->redirectToRoute('comment', ['slugLesson' => $lesson->getSlug()]);
    }
}
