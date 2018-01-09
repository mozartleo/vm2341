<?php

namespace App\AdminBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class BlogPostController extends Controller
{
    /**
     * @Route("blog/post", name="blog_post")
     *
     * @return Response
     */
    public function index()
    {
        return $this->render('@Admin/blogPost/index.html.twig');
    }

    /**
     * @Route(
     *     "blog/{action}/{id}",
     *     defaults={"id": null},
     *     requirements={
     *          "action": "create|update",
     *          "id": "\d+"
     *     }
     * )
     *
     * @param string $action
     * @param integer $id
     * @return Response
     */
    public function form($action, $id)
    {
        return $this->render('@Admin/blogPost/form.html.twig', [
            'action' => $action,
            'id' => $id
        ]);
    }
}
