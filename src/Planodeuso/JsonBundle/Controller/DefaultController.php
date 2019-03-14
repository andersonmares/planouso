<?php

namespace Planodeuso\JsonBundle\Controller;

use Admin\AdminBundle\Entity\Municipio;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('JsonBundle:Default:index.html.twig');
    }

    /**
     * @Route("municipio/{coUfIbge}", name="json_municipio", options={ "expose" = true })
     */
    public function municipioAction(Request $request, $coUfIbge)
    {
        $municipio = $this->getDoctrine()->getRepository(Municipio::class);
        $result = $municipio->createQueryBuilder('a')
            ->andWhere('a.coUFIbge = :coUFIbge')
            ->andWhere('a.stMunicipio = :stMunicipio')
            ->andWhere('a.stRegistroAtivo = :stRegistroAtivo')
            ->setParameter('coUFIbge', $coUfIbge)
            ->setParameter('stMunicipio', 'ATIVO')
            ->setParameter('stRegistroAtivo', 'S')
            ->orderBy('a.noMunicipio')
            ->getQuery()
            ->getArrayResult();
        return new JsonResponse(
            array(
                'data' => $result
            )
        );

    }

}
