<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Task;
use AppBundle\Form\TaskType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TaskController extends Controller
{
    /**
     * @param Request $request
     * @Route("/", name="index")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(Request $request)
    {
        $repo = $this->getDoctrine()->getRepository(Task::class);

        $openTasks = $repo->findBy(["status" => "Open"]);
        $inProgressTasks = $repo->findBy(["status" => "In Progress"]);
        $finishedTasks = $repo->findBy(["status" => "Finished"]);

        return $this->render(
            ":task:index.html.twig",
            [
                "openTasks" => $openTasks,
                "inProgressTasks" => $inProgressTasks,
                "finishedTasks" => $finishedTasks
            ]
        );

    }

    /**
     * @param Request $request
     * @Route("/create", name="create")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(Request $request)
    {
        $task = new Task();
        $form = $this->createForm(TaskType::class, $task);
        $form->handleRequest($request);

        $errorMessage = "";

        if ($form->isSubmitted()) {
            if($form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->persist($task);
                $em->flush();

                return $this->redirect("/");
            }else{
                $errorMessage = "Invalid data entered!";
            }
        }

        return $this->render(
            ":task:create.html.twig",
            ["task" => $task, "form" => $form->createView(), "errorMsg" => $errorMessage]
        );
    }

    /**
     * @Route("/edit/{id}", name="edit")
     *
     * @param $id
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit($id, Request $request)
    {
        $taskRepo = $this->getDoctrine()->getRepository(Task::class);
        $task = $taskRepo->find($id);

        if ($task == null) {
            return $this->redirect("/");
        }

        $form = $this->createForm(TaskType::class, $task);
        $form->handleRequest($request);

        $errorMsg = "";

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->merge($task);
                $em->flush();

                return $this->redirect("/");
            } else{
                $errorMsg = "Invalid data entered!";
            }
        }
        return $this->render(
            ":task:edit.html.twig",
            ["task" => $task, "form" => $form->createView(),
                "errorMsg" => $errorMsg]
        );
    }
}
