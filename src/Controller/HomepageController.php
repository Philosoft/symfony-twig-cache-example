<?php

declare(strict_types=1);

namespace App\Controller;

use DateTimeImmutable;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\Routing\Annotation\Route;

#[AsController]
#[Route('/')]
class HomepageController extends AbstractController
{
    public function __invoke()
    {
        return $this->render(
            'base.html.twig',
            [
                'cachedAt' => new DateTimeImmutable()
            ]
        );
    }
}
