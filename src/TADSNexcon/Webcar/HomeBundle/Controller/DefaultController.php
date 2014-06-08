<?php

namespace TADSNexcon\Webcar\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use TADSNexcon\Webcar\CoreBundle\Form\LeadType;
use TADSNexcon\Webcar\CoreBundle\Entity\Lead;
use TADSNexcon\Webcar\CoreBundle\Entity\Configuration;

class DefaultController extends Controller {

    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction() {
        $brands = $this->getDoctrine()->getRepository("TADSNexconWebcarCoreBundle:Brand")
                ->findAllOrderedByName();
        
        $entity = new Lead();
        $form   = $this->createCreateForm($entity);
        
        return array('brands' => $brands, 'form' => $form->createView());
    }

    /**
     * @Route("/brand/{id}")
     * @param integer $id
     * @Template()
     */
    public function getVehiclesAction($id) {
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
    public function getModelsAction($id) {
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
    public function getModelInfoAction($id) {
        $model = $this->getDoctrine()
                ->getRepository('TADSNexconWebcarCoreBundle:Model')
                ->findComplete($id);
        return array('model' => $model);
    }
    
    /**
     * @Route("/configuration")
     * @Template()
     */
    public function saveConfigurationAction(Request $request){
        $message = "";
        
        $leadId = $request->request->get("leadId");
        $modelId = $request->request->get("modelId");
        $colorId = $request->request->get("modelColorId");
        $kits = $request->request->get("kits");
        $acessories = $request->request->get("acessories");
        
        $em = $this->getDoctrine()->getManager();
        $configuration = new Configuration();
        
        $configuration->setLead($em->getRepository('TADSNexconWebcarCoreBundle:Lead')->find($leadId));
        $configuration->setModel($em->getRepository('TADSNexconWebcarCoreBundle:Model')->find($modelId));
        $configuration->setModelColor($em->getRepository('TADSNexconWebcarCoreBundle:ModelColor')->find($colorId));
        
        foreach ($kits as $kit) {
            $configuration->addKit($em->getRepository('TADSNexconWebcarCoreBundle:Kit')->find($kit));
        }
        
        foreach ($acessories as $acessory) {
            $configuration->addAcessory($em->getRepository('TADSNexconWebcarCoreBundle:Acessory')->find($acessory));
        }
        
        $em->persist($configuration);
        $em->flush();
        
        
        
        
        return array('msg' => $message);
    }
    
    /**
     * Creates a new Lead entity.
     *
     * @Route("/", name="lead_create")
     * @Method("POST")
     * @Template("TADSNexconWebcarCoreBundle:Lead:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Lead();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('lead_show', array('lead' => $entity)));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Lead entity.
    *
    * @param Lead $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Lead $entity)
    {
        $form = $this->createForm(new LeadType(), $entity, array(
            'action' => $this->generateUrl('lead_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Cadastrar'));

        return $form;
    }

}
