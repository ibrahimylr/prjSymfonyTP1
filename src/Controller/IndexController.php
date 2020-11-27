<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\Lesson;
use App\Form\CommentType;
use App\Repository\CommentRepository;
use App\Repository\LessonRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(LessonRepository $lessonRepository): Response
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
            'lessons' => $lessonRepository->findAll()
        ]);
    }

    /**
     * @Route("/comment/{slugLesson}", name="index_comment")
     * @ParamConverter("lesson", options={ "mapping":{"slugLesson":"slug"} })
     */
    public function comment(Lesson $lesson, int $page = 1, LessonRepository $lessonRepository, CommentRepository $commentRepository, Request $request, EntityManagerInterface $entityManager, PaginatorInterface $paginator): Response
    {
        $comment = new Comment();
        $comment->setLesson($lesson);

        $lesCommentaires = $commentRepository->getCommentPaginated($lesson, $page);

        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $data = $form->getData();
            $entityManager->persist($data);
            $entityManager->flush();

            unset($comment);
            unset($form);
            $comment = new Comment();
            $form = $this->createForm(CommentType::class, $comment);
        }

        $pagination = $paginator->paginate(
            $lesCommentaires,
            $request->query->getInt('page', 1),
            30
        );

        return $this->render('index/comment.html.twig', [
            'controller_name' => 'IndexController',
            'lesson' => $lessonRepository->find($lesson),
            'comments' => $lesCommentaires->getResult(),
            'pagination' => $pagination,
            'form' => $form->createView(),
        ]);
    }
}
