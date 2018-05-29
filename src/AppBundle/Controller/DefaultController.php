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
        $chains = $service->findBy(['enabled' => true]);
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

    /**
     * @Route("/bps/{url}", name="bps", requirements={"url"=".+"})
     */
    public function bpsAction($url)
    {
        $urlParsed = parse_url($url);
        if (!isset($urlParsed['host'], $urlParsed['scheme'])) {
            throw $this->createAccessDeniedException();
        }

        $urlJsonBp = $urlParsed['scheme'].'://'.$urlParsed['host'].'/bp.json';
        $exist = false;
        $content = apcu_fetch($urlJsonBp, $exist);
        if ($exist) {
            return new JsonResponse($content);
        }

        $content = json_decode(file_get_contents($urlJsonBp));
        if (!$content || !isset($content['producer_account_name'])) {
            throw $this->createAccessDeniedException();
        }

        apcu_store($urlJsonBp, $content, 300);

        return new JsonResponse($content);
    }
}
