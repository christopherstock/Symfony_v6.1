<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController
{
    #[Route('/lucky/number')]
    public function number(): Response
    {
        $number = random_int(0, 100);

        return new Response(
            '<html lang="de"><body>Lucky number: '.$number.'</body></html>'
        );
    }

    #[Route('/lucky/numbers')]
    public function numbers(): Response
    {
        $number1 = random_int(0, 100);
        $number2 = random_int(0, 100);

        return new Response(
            '<html lang="de"><body>Lucky numbers: '.$number1.' '.$number2.'</body></html>'
        );
    }
}
