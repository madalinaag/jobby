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


        $queryAllJobsNoExperience="//offers//offer/experiences[not(experience)]";

        $queryAllJobsExperienceMore2Less5="//offers//offer/experiences[count(experience) >=2 and count(experience)<=5]";


        $queryAllJobs5Candidates="//offers/offer[nocandidates >= '5'] ";


        $queryAllJobsRejected="//offers/offer[rejected = 'true'] ";



        $allJobsArray = $xml->xpath($queryAllJobs);
        $allJobsInDomain = $xml->xpath($queryAllJobsInDomain);
        $allJobsInHireRange = $xml->xpath($queryAllJobsHireRange);
        $allJobsInExperience = $xml->xpath($queryAllJobsExperience);
        $allJobs5Candidates = $xml->xpath($queryAllJobs5Candidates);
        $allJobsNoExperience = $xml->xpath($queryAllJobsNoExperience);
        $allJobsRejected = $xml->xpath($queryAllJobsRejected);
        $allJobsExperienceLess2More5 = $xml->xpath($queryAllJobsExperienceMore2Less5);




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
        dump($allJobsNoExperience);
        dump($allJobsRejected);
        dump($allJobsExperienceLess2More5);

        die();

    }


}
