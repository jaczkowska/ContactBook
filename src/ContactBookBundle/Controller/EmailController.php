<?php

namespace ContactBookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class EmailController extends Controller
{
    /**
     * @Route("/addEmail")
     * @Template()
     */
    public function addEmailAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/editEmail")
     * @Template()
     */
    public function editEmailAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/deleteEmail")
     * @Template()
     */
    public function deleteEmailAction()
    {
        return array(
                // ...
            );    }

}
