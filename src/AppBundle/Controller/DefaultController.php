<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
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
        $username =   $request->request->get('username');
        $password =   $request->request->get('password');

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

        $hard = $this->getHardJobs($allJobsArray);
        $jobs = $this->monthlyRange($allJobsArray);
        $hardJobs = $this->monthlyRange($hard);
//        $session = new Session();
//        $session->start();
//        $session->set('name', 'Drak');

        if (!empty($xmlUser->xpath($queryLogin))) {
            return $this->render('list.html.twig', [
                'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
                'jobs' => $jobs,
                'hardJobs' => $hardJobs,
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
        $query = '';
        $message = 'No jobs found!';


        if ($request->request->get('domainRadio') == 'on') {
            $domain = $request->request->get('domain');
            $query = "//offers/offer[domain='".$domain."']";
        }

        if ($request->request->get('rangeRadio') == 'on') {

            $min = $request->request->get('minR');
            $max = $request->request->get('maxR');

            $query = "//offers//offer[hiringRange[min>='".$min."' and max <='".$max."']]";
        }

        if ($request->request->get('expRadio') == 'on') {

            $min = $request->request->get('minE');
            $max = $request->request->get('maxE');

            $query = "//offers//offer[experiences/experience[noYrs>='".$min."' and noYrs <= '".$max."']]";
        }

        if ($request->request->get('otherRadio') == 'on') {
            if ($request->request->get('other') == 'more5') {
                $query = "//offers/offer[nocandidates >= '5'] ";
            }
            if ($request->request->get('other') == 'more2less5') {
                $query = "//offers//offer[experiences[count(experience) >=2 and count(experience)<=5]]";
            }
            if ($request->request->get('other') == 'noexp') {
                $query = "//offers//offer[experiences[not(experience)]]";
            }
            if ($request->request->get('other') == 'rej') {
                $query = "//offers//offer[rejected = true]";
            }
        }

        if ($query) {
            $jobs = $xml->xpath($query);
            $jobsAll = $this->monthlyRange($jobs);

        } else {
            $jobsAll = null;
            $message = 'No criteria selected!';
        }

        $queryAllJobs="//offers/offer";
        $allJobsArray = $xml->xpath($queryAllJobs);

        $hard = $this->getHardJobs($allJobsArray);
        $hardJobs = $this->monthlyRange($hard);

        if (!empty($jobsAll)) {
            return $this->render('list.html.twig', [
                'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
                'jobs' => $jobsAll,
                'hardJobs' => $hardJobs,
            ]);
        }
            $this->addFlash('error', $message);

            return $this->render('list.html.twig', [
                'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
                'jobs' => '',
                'hardJobs' => $hardJobs,
            ]);


    }

    public function saveAction() {
        return $this->render('save.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }


    public function addAction(Request $request) {
        $jobName = $request->request->get('JobName');
        $domain = $request->request->get('Domain');
        $department = $request->request->get('Department');
        $companyName = $request->request->get('CompanyName');
        $companyLocation = $request->request->get('CompanyLocation');
        $type = $request->request->get('Type');
        $yearsOfExperience = $request->request->get('YearsOfExperience');
        $skill = $request->request->get('Skill');
        $title = $request->request->get('Title');
        $hireRangeMin = $request->request->get('HireRangeMin');
        $hireRangeMax = $request->request->get('HireRangeMax');

        $fileLocator = $this->container->get('file_locator');
        $path = $fileLocator->locate('@AppBundle/Entity/jobOffer.xml');
        $document = new \DOMDocument();
        $document->loadXML(file_get_contents($path));
        $xml = new \SimpleXMLElement($document->saveXML());

        $domMyValues = dom_import_simplexml($xml);
        $offer = $domMyValues->ownerDocument->createElement('offer');
        $company = $domMyValues->ownerDocument->createElement('company');
        $exp = $domMyValues->ownerDocument->createElement('experience');
        $range = $domMyValues->ownerDocument->createElement('hiringRange');

        $company->appendChild($domMyValues->ownerDocument->createElement('name', $companyName));
        $company->appendChild($domMyValues->ownerDocument->createElement('location', $companyLocation));

        $exp->appendChild($domMyValues->ownerDocument->createElement('noYrs', $yearsOfExperience));
        $exp->appendChild($domMyValues->ownerDocument->createElement('skills', $skill));
        $exp->appendChild($domMyValues->ownerDocument->createElement('title', $title));

        $exps = $domMyValues->ownerDocument->createElement('experiences');
        $exps->appendChild($exp);

        $range->appendChild($domMyValues->ownerDocument->createElement('min', $hireRangeMin));
        $range->appendChild($domMyValues->ownerDocument->createElement('max', $hireRangeMax));

        $offer->appendChild($domMyValues->ownerDocument->createElement('name', $jobName));
        $offer->appendChild($domMyValues->ownerDocument->createElement('domain', $domain));
        $offer->appendChild($company);
        $offer->appendChild($domMyValues->ownerDocument->createElement('type', $type));
        $offer->appendChild($domMyValues->ownerDocument->createElement('department', $department));
        $offer->appendChild($exps);
        $offer->appendChild($range);
        $offer->appendChild($domMyValues->ownerDocument->createElement('nocandidates', '0'));
        $offer->appendChild($domMyValues->ownerDocument->createElement('rejected', 'false'));

        $elements = $xml->xpath('//offers');
        $refNode = dom_import_simplexml($elements[0]->offer[0]);


        $domMyValues->insertBefore($offer, $refNode);
        $doc = dom_import_simplexml($xml)->ownerDocument;
        $doc->preserveWhiteSpace = false;
        $doc->formatOutput = true;
        $doc->loadXML($xml->asXML());

        $offerObj = simplexml_import_dom($offer);

//        $doc->save($path);

        return $this->render('offer.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'offer' => $offerObj,

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

        $queryAllJobsHireRange="//offers//offer[hiringRange[min>='1000' and max <='3500']]";

        $queryAllJobsExperience="//offers//offer//experiences/experience[noYrs>='3' and noYrs <= '5'] ";

        $queryAllJobsNoExperience="//offers//offer/experiences[not(experience)]";

        $queryAllJobsExperienceMore2Less5="//offers//offer/experiences[count(experience) >=2 and count(experience)<=5]";

        $queryAllJobsRejected="//offers//offer[rejected = true]";

        $queryAllJobs5Candidates="//offers/offer[nocandidates >= '5'] ";

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

        dump($this->monthlyRange($allJobsArray));
        dump($allJobsInDomain);
        dump($allJobsInHireRange);
        dump($allJobsInExperience);
        dump($allJobs5Candidates);
        dump($max);
        dump($allJobsNoExperience);
        dump($allJobsRejected);
        dump($allJobsExperienceLess2More5);
        dump($this->getHardJobs($allJobsArray));

        die();
    }


    public function monthlyRange($allJobsArray){
        $newArrayJobs=[];
        foreach($allJobsArray as $obj)
        {
            if(!empty( $obj->hiringRange))
            {
                $obj->monthlyrange=(int)(((int)$obj->hiringRange->min/12)+((int)$obj->hiringRange->max/12))/2;
                $newArrayJobs[]=$obj;

            }

        }


        return $newArrayJobs;
    }

    public function getHardJobs($allJobsArray) {
        $newArrayJobs = [];

        foreach ($allJobsArray as $obj) {

            if (count($obj->experiences->experience) >= 3 && $obj->nocandidates >= 10 ) {
                $newArrayJobs[] = $obj;;
            }

        }

        return $newArrayJobs;
    }
}
