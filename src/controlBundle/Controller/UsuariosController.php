<?php

namespace controlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use controlBundle\Entity\usuarios;
use controlBundle\Form\usuariosType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\HttpFoundation\RedirectResponse;
class UsuariosController extends Controller
{
  /**
   * @Route("/admin/listausuarios", name="listausuarios")
   */

  public function Top100Action(Request $request)
  {
      // replace this example code with whatever you need
      $repository = $this->getDoctrine()->getRepository(usuarios::class);
      // find *all* jugadores
      $user = $repository->findAll();
      return $this->render('usuarios/listausuarios.html.twig',array("user"=>$user));

  }
  /**
   * @Route("/admin/actualizaruser/{id}",name="actualizaruser")
   */
  public function actuUser(Request $request,$id)
  {
    $usuario = $this->getDoctrine()->getRepository('controlBundle:usuarios')->find($id);
    $form=$this->createForm(usuariosType::Class, $usuario);
    $form->handleRequest($request);


    if ($form->isSubmitted() && $form->isValid())
       {
           $em = $this->getDoctrine()->getManager();
           $em->persist($usuario);
           $em->flush();
           //Redirecciona
           return new RedirectResponse($this->generateUrl('listausuarios'));;
       }
         return $this->render("usuarios/formulario.html.twig", array('form'=>$form->createView() ));
   }
   /**
    * @Route("/admin/borrarUser/{id}",name="borrarUser")
    */
   public function borrarFormtop100( Request $request,$id)
   {
     $usuario = $this->getDoctrine()->getRepository('controlBundle:usuarios')->find($id);
     $form=$this->createForm(usuariosType::Class, $usuario);
     $form->handleRequest($request);

     if ($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->remove($usuario);
            $em->flush();
            //Redirecciona
            return new RedirectResponse($this->generateUrl('listausuarios'));;
        }
          return $this->render("usuarios/formulario.html.twig", array('form'=>$form->createView() ));
    }
  /**
   * @Route("/registro", name="registro")
   */
public function registroAction(Request $request)
{
    // 1) build the form
    $usuario = new usuarios();
    $form = $this->createForm(usuariosType::class, $usuario);

    // 2) handle the submit (will only happen on POST)
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {

        // 3) Encode the password (you could also do this via Doctrine listener)
        $password = $this->get('security.password_encoder')
        ->encodePassword($usuario,$usuario->getPlainPassword());
        $usuario->setPassword($password);
        // 4) save the User!
        $roles = ["ROLE_PROFESOR"];
        $usuario->setRoles($roles);
        $em = $this->getDoctrine()->getManager();
        $em->persist($usuario);
        $em->flush();

        // ... do any other work - like sending them an email, etc
        // maybe set a "flash" success message for the user

        return new Response("Usuario Registrado correctamente");
    }

    return $this->render(
        'usuarios/registro.html.twig',
        array('form' => $form->createView())
    );
}

    /**
    * @Route("/login", name="login")
    */
    public function loginAction(Request $request)
    {
      $authenticationUtils = $this->get('security.authentication_utils');

      // get the login error if there is one
      $error = $authenticationUtils->getLastAuthenticationError();

      // last username entered by the user
      $lastUsername = $authenticationUtils->getLastUsername();

      return $this->render('usuarios/login.html.twig', array(
          'last_username' => $lastUsername,
          'error'         => $error,
        ));
      }

      /**
      * @Route("/logout", name="logout")
      */
      public function logout()
      {
        return $this->render('usuarios/login.html.twig');
      }

}
