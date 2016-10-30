<?php

namespace ContactBookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class AddressController extends Controller
{
    /**
     * @Route("/addAddress")
     * @Template()
     */
    public function addAddressAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/editAddress")
     * @Template()
     */
    public function editAddressAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/deleteAddress")
     * @Template()
     */
    public function deleteAddressAction()
    {
        return array(
                // ...
            );    }

}
