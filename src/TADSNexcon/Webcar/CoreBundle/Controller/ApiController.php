<?php

namespace TADSNexcon\Webcar\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/api")
 */
class ApiController extends Controller
{
    /**
     * @Route("/brand/{id}")
     * @param integer $id
     * @Template("TADSNexconWebcarCoreBundle:Api:getVehicles.json.twig")
     */
    public function getVehiclesAction($id){
        $vehicles = $this->getDoctrine()
                ->getRepository('TADSNexconWebcarCoreBundle:Vehicle')
                ->findByBrand($id);
        return array('vehicles' => $vehicles);
    }
    
    
    /**
     * @Route("/vehicle/{id}")
     * @Template();
     * @param integer $id
     */
    public function getModelsAction($id){
        $models = $this->getDoctrine()
                ->getRepository('TADSNexconWebcarCoreBundle:Model')
                ->findByVehicle($id);
        return array($models);
    }
    
    /**
     * @Route("/model/{id}")
     * @Template()
     * @param integer $id
     */
    public function getModelAction($id){
        $model = $this->getDoctrine()
                ->getRepository('TADSNexconWebcarCoreBundle:Model')
                ->findComplete($id);
        return array($model);
    }
    
    
    
}
