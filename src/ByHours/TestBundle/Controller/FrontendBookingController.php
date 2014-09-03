<?php

namespace ByHours\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class FrontendBookingController extends Controller
{
    /**
     * @Route("/step1")
     * @Template()
     */
    public function step1Action()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/step2")
     * @Template()
     */
    public function step2Action()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/saveBooking")
     * @Template()
     */
    public function saveBookingAction()
    {
        return array(
                // ...
            );    }

}
