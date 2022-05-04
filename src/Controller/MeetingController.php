<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MeetingController extends AbstractController
{
    /**
     * @Route("/", name="prebuiltSDKCreateMeeting")
     */
    public function prebuiltSDKCreateMeeting(): Response
    {
        return $this->render('meeting/prebuiltSDK-create-meeting.html.twig', [
            'VIDEOSDK_API_KEY' => $this->getParameter('app.videosdk_api_key'),
            'VIDEOSDK_VERSION' => $this->getParameter('app.videosdk_version'),
        ]);
    }
}
