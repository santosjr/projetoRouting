<?php
namespace AppBundle\Controller;

	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Symfony\Component\HttpFoundation\Response;
	use Symfony\Component\HttpFoundation\Request;


	class pageController extends controller
	{
		/**
		 * @Route("/entrar" , name="login")
		 */
		public function loginAction(Request $request)
		{
			$email = $request->request->get('email');
			$senha = $request->request->get('senha');

			if($email != '' && $senha != '' && $email != null && $senha != null)
			{
				return $this->redirectToRoute('home_page', array('request' => $request), 307);
			}

			return $this->render('pages/login.html.php', array());
		}

		/**
		 * @Route("/index" , name="home_page")
		 */
		public function homeAction()
		{
			$request = Request::createFromGlobals();
			$email = $request->request->get('email');
			$senha = $request->request->get('senha');
			
			return $this->render('pages/home.html.php', array("email"=>$email, "senha"=>$senha));
		}
	}

  ?>