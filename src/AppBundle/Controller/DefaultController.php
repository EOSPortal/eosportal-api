<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Chain;
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
            $chainsReturn[] = $chain->toArray();
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

        if (!$chain) {
            throw $this->createNotFoundException('Unable to find chain.');
        }

        return new JsonResponse($chain->toArray());
    }

    /**
     * @Route("/chain", name="store_chains")
     * @Method({"POST"})
     */
    public function storeChainsAction(Request $request)
    {
        $service = $this->get('eosportal.chains.chain_service');
        $url = $request->get('url');
        try {
            $chain = $service->create($url);
        } catch (\Exception $ex) {
            throw $this->createNotFoundException('Unable to find chain.');
        }

        return new JsonResponse($chain->toArray());
    }

    /**
     * @Route("/", name="index")
     */
    public function indexAction()
    {
        return new JsonResponse([]);
    }
}
