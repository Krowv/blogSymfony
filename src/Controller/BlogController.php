<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="app_blog")
     */
    public function index(ArticleRepository $articleRepository): Response
    {
        $articles = $articleRepository->findAll();
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
            'articles' => $articles
        ]);
    }

    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render('blog/home.html.twig',[
            'title' => 'Bienvenue sur mon blog'
        ]);
    }

    /**
     * @Route("/blog/new", name="create_article")
     */
    public function createArticle(){
        $article = new Article();

        $form = $this->createFormBuilder($article)
                    ->add('title', TextType::class,[
                        'attr' => [
                            'placeholder' => "Titre de l'article"
                        ]
                    ])
                    ->add('content', TextAreaType::class)
                    ->add('image')
                    ->getForm();

        return $this->render('blog/create.html.twig',[
            'formArticle' => $form->createView()
        ]);
    }

    /**
     * @Route("/blog/{id}", name="blog_show")
     */
    public function show(int $id, ArticleRepository $articleRepository)
    {
        $article = $articleRepository->find($id);

        return $this->render('blog/show.html.twig',[
            'article' => $article
        ]);
    }
}
