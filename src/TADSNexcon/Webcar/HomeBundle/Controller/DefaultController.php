<?php

namespace TADSNexcon\Webcar\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        $brands = $this->getDoctrine()->getRepository("TADSNexconWebcarCoreBundle:Brand")
                       ->findAllOrderedByName();
        return array('brands' => $brands);
    }
    
    /**
     * @Route("/brand/{id}")
     * @param integer $id
     * @Template()
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
        return array('models' => $models);
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
        return array('model' => $model);
    }
}