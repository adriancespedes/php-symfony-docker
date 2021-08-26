<?php

namespace App\Controller;

use App\UseCases\DiscountListUseCase;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DiscountController extends AbstractController
{

    private DiscountListUseCase $useCase;

    public function __construct(
        DiscountListUseCase $useCase)
    {
        $this->useCase = $useCase;
    }

    /**
     * @Route("/discount", name="discount")
     */
    public function index(): Response
    {

        $response = $this->useCase->__invoke();
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/DiscountController.php',
            'response' => $response,
        ]);
    }
}
