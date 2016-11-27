<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('login.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }
    public function loginAction(Request $request)
    {
        $username =   $request->query->get('username');
        $password =   $request->query->get('password');

        $fileLocator = $this->container->get('file_locator');
        $pathUser = $fileLocator->locate('@AppBundle/Entity/user.xml');
        $documentUser = new \DOMDocument();
        $documentUser->loadXML(file_get_contents($pathUser));
        $path = $fileLocator->locate('@AppBundle/Entity/jobOffer.xml');
        $documentJob = new \DOMDocument();
        $documentJob->loadXML(file_get_contents($path));

        $xmlUser = new \SimpleXMLElement($documentUser->saveXML());
        $xmlJob = new \SimpleXMLElement($documentJob->saveXML());


        $queryAllJobs="//offers/offer";
        $queryLogin="//users/user[username='".$username."' and password= '".$password."']";
        $allJobsArray = $xmlJob->xpath($queryAllJobs);

        if (!empty($xmlUser->xpath($queryLogin))) {
            return $this->render('list.html.twig', [
                'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
                'jobs' => $allJobsArray,
            ]);
        } else {
            $this->addFlash('error', 'Invalid username or password!');
            return $this->redirect($this->generateUrl('homepage'));
        }

    }

    public function searchAction(Request $request) {

        $fileLocator = $this->container->get('file_locator');
        $path = $fileLocator->locate('@AppBundle/Entity/jobOffer.xml');
        $document = new \DOMDocument();
        $document->loadXML(file_get_contents($path));
        $xml = new \SimpleXMLElement($document->saveXML());


        if ($request->query->get('domainRadio') == 'on') {
            $search = 'domain';
        }

        if ($search == 'domain') {
            $domain = $request->query->get('domain');
            $query = "//offers/offer[domain='".$domain."']";
        }

        $jobs = $xml->xpath($query);

        if (!empty($jobs)) {
            return $this->render('list.html.twig', [
                'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
                'jobs' => $jobs,
            ]);
        }
            $this->addFlash('error', 'No jobs found!');
            return $this->render('list.html.twig', [
                'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
                'jobs' => '',
            ]);


    }

    public function testAction() {
        $fileLocator = $this->container->get('file_locator');
        $path = $fileLocator->locate('@AppBundle/Entity/jobOffer.xml');
        $document = new \DOMDocument();
        $document->loadXML(file_get_contents($path));
        $xml = new \SimpleXMLElement($document->saveXML());

        $query = "//offers/offer[name='test']";

        $queryLogin="//users/user[username='gigel' and password='123456']";

        $queryAllJobs="//offers/offer";

        $queryAllJobsInDomain="//offers/offer[domain='IT']";


        $queryAllJobsHireRange="//offers//offer/hiringRange[min>='1000' and max <='3500'] ";


        $queryAllJobsExperience="//offers//offer//experiences/experience[noYrs>='3' and noYrs <= '5'] ";


        $queryAllJobs5Candidates="//offers/offer[nocandidates >= '5'] ";

        $allJobsArray = $xml->xpath($queryAllJobs);
        $allJobsInDomain = $xml->xpath($queryAllJobsInDomain);
        $allJobsInHireRange = $xml->xpath($queryAllJobsHireRange);
        $allJobsInExperience = $xml->xpath($queryAllJobsExperience);
        $allJobs5Candidates = $xml->xpath($queryAllJobs5Candidates);

        $max = 0;
        foreach($allJobsArray as $obj)
        {
            if( (int) $obj->nocandidates  > $max)
            {
                $max = (int) $obj->nocandidates ;
            }
        }

        dump($allJobsArray);
        dump($allJobsInDomain);
        dump($allJobsInHireRange);
        dump($allJobsInExperience);
        dump($allJobs5Candidates);
        dump($max);

        die();

    }
}
