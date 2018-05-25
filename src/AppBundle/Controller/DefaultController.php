<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Chain;
use AppBundle\Services\ChainService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/chains", name="chains")
     * @Method({"GET"})
     */
    public function chainsAction()
    {
        $service = $this->get('eosportal.chains.chain_service');
        $chains = $service->findAll();
        $chainsReturn = [];

        /** @var Chain $chain */
        foreach ($chains as $chain) {
            $chainsReturn[] = [
                'id' => $chain->id(),
                'url' => $chain->url(),
            ];
        }

        return new JsonResponse($chainsReturn);
    }

    /**
     * @Route("/chains/{id}", name="chain")
     * @Method({"GET"})
     */
    public function chainAction(string $id)
    {
        $service = $this->get('eosportal.chains.chain_service');
        $chain = $service->findOneBy(['id' => $id]);

        return new JsonResponse([
            'id' => $chain->id(),
            'url' => $chain->url(),
        ]);
    }

    /**
     * @Route("/chain", name="store_chains")
     * @Method({"POST"})
     */
    public function storeChainsAction(Request $request)
    {
        /** @var ChainService $service */
        $service = $this->get('eosportal.chains.chain_service');

        $url = $request->get('url');

        // TODO: validate chain
        $chain = new Chain($url);
        $service->store($chain);

        return new JsonResponse(['id' => $chain->id()]);
    }

    /**
     * @Route("/", name="index")
     */
    public function indexAction()
    {
        return new JsonResponse([]);
    }
}
