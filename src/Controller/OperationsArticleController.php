<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article;

class OperationsArticleController extends AbstractController
{
    /**
     * @Route("/operations/article", name="operations_article")
     */
    public function index(ArticleRepository $repo)
    {
       // $repo = $this->getDoctrine()->getRepository(Article::class);
        $articles = $repo->findAll();

        return $this->render('operations_article/index.html.twig', [
            'controller_name' => 'OperationsArticleController',
            'articles' => $articles
        ]);
    }

    /**
     * @route("/", name="home")
     */
    public function home(){
        return $this->render('operations_article/home.html.twig');
    }

//    /**
//     * @Route("/operations/article/create", name="create")
//     */
//    public function create(){
//        return $this->render('operations_article/create.html.twig');
//    }

    /**
     * @Route("/operations/article/{id}", name="operations_article_show", requirements={"id":"\d+"})
     */
    public function show(Article $article){
        return $this->render('operations_article/show.html.twig', [
            'article' => $article
            ]
        );
    }
}
