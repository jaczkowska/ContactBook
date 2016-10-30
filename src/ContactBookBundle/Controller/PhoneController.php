<?php

namespace ContactBookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class PhoneController extends Controller
{
    /**
     * @Route("/addPhone")
     * @Template()
     */
    public function addPhoneAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/editPhone")
     * @Template()
     */
    public function editPhoneAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/deletePhone")
     * @Template()
     */
    public function deletePhoneAction()
    {
        return array(
                // ...
            );    }

}
