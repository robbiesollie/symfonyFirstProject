<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\Attribute\MapQueryParameter;

class LuckyController extends AbstractController
{
	#[Route('/lucky/number', methods: ['GET'])]
	public function number(#[MapQueryParameter] int $start = 0, #[MapQueryParameter] int $end = 100): Response
	{
		$number = random_int($start, $end);

		return $this->render('lucky/number.html.twig', [
			'number' => $number,
		]);
	}
}