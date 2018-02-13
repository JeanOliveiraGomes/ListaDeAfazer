<?php


namespace AppBundle\Controller;


use AppBundle\Entity\todo;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class TodoController extends Controller
{

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

    $todos = $this -> getDoctrine() -> getRepository('AppBundle:todo')->findAll();

        return $this->render('todo/index.html.twig', array(
            'todos' => $todos
        ));
    }

 /**
     * @Route("/create", name="create")
     */
    public function createAction(Request $request)
    {
        $todo = new todo();


         $form = $this->createFormBuilder($todo)
            ->add('name', TextType::class)
            ->add('categoria', TextType::class)
            ->add('descricao', TextareaType::class)
            ->add('prioridade', TextType::class)
            ->add('deverdia', DateTimeType::class)
             ->add('diacriacao', DateTimeType::class)
            ->add('save', SubmitType::class, array('label' => 'Criar Tarefa'))
            ->getForm();
            $form->HandleRequest($request);

 if ($form->isSubmitted() && $form->isValid()) {

        $name = $form['name']->getData();
        $categoria = $form['categoria']->getData();
        $descricao = $form['descricao']->getData();
        $prioridade = $form['prioridade']->getData();
        $deverdia = $form['deverdia']->getData();
        $diacriacao = $form['diacriacao']->getData();
        
        $todo->setName($name);
        $todo->setDescricao($descricao);
        $todo->setPrioridade($prioridade);
        $todo->setDeverDia($deverdia);
        $todo->setDiaCriacao($diacriacao);
        $todo->setCategoria($categoria);

        $todo = $form->getData();

        $em=$this->getDoctrine()->getManager();

        $em ->persist($todo);
        $em ->flush();
        return $this->redirectToRoute('homepage');
    }


        return $this->render('todo/create.html.twig',array(
            'form' => $form->createView(),));
    }


 /**
     * @Route("/edit/{id}", name="edit")
     */
    public function editAction($id, Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('todo/edit.html.twig');
    }

    /**
     * @Route("/delet/{id}", name="delete")
     */
    public function deleteAction($id, Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('todo/delete.html.twig');
    }

    /**
     * @Route("/detail/{id}", name="detalhes")
     */
        public function detailsAction($id, Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('todo/detalhes.html.twig');
    }


}
