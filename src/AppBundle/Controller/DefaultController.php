<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    public function loginAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('login.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    public function testAction() {
        $fileLocator = $this->container->get('file_locator');
        $path = $fileLocator->locate('@AppBundle/Entity/test.xml');
        $document = new \DOMDocument();
        $document->loadXML(file_get_contents($path));

        $xml = new \SimpleXMLElement($document->saveXML());
        $query = '//mylist/element[my_status=2]';

        $entries = $xml->xpath($query);

        dump($entries);
        die();
    }
}
