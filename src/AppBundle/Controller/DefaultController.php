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
        $session = $request->getSession();

        $user = $xmlUser->xpath($queryLogin);

        $date = new \DateTime();
        $month = $date->format('m');

        $countQuery = "//offers/offer/date[month=".$month."])";
        $avg = count($countQuery)/30;

        if (!empty($user)) {

            $session->set('username', (string) $user[0]->username);
            $session->set('role', (string) $user[0]->role);

            return $this->render('list.html.twig', [
                'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
                'jobs' => $jobs,
                'hardJobs' => $hardJobs,
                'avg' => $avg,
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
        $query = "//offers/offer";

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


        $jobs = $xml->xpath($query);
        $jobsAll = $this->monthlyRange($jobs);

        $queryAllJobs="//offers/offer";
        $allJobsArray = $xml->xpath($queryAllJobs);

        $hard = $this->getHardJobs($allJobsArray);
        $hardJobs = $this->monthlyRange($hard);

        $date = new \DateTime();
        $month = $date->format('m');

        $countQuery = "//offers/offer/date[month=".$month."])";
        $avg = count($countQuery)/30;

            return $this->render('list.html.twig', [
                'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
                'jobs' => $jobsAll,
                'hardJobs' => $hardJobs,
                'avg' => $avg,
            ]);

    }

    public function saveAction() {
        return $this->render('save.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    public function savePdfAction(Request $request) {

        $session = $request->getSession();
        $code = $session->get('offer');
        $fileLocator = $this->container->get('file_locator');
        $path = $fileLocator->locate('@AppBundle/Entity/jobOffer.xml');
        $document = new \DOMDocument();
        $document->loadXML(file_get_contents($path));
        $xml = new \SimpleXMLElement($document->saveXML());

        $query = "//offers/offer[code='".$code."']";

        $offer = $xml->xpath($query);

        $html = $this->renderView('offerSave.html.twig', ['offer'=>$offer[0]]);

        $filename = sprintf('job_offer-%s.pdf', date('Y-m-d'));

        return new Response(
            $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
            200,
            [
                'Content-Type'        => 'application/pdf',
                'Content-Disposition' => sprintf('attachment; filename="%s"', $filename),
            ]
        );

    }

    public function addAction(Request $request) {
        $code = $request->request->get('Code');
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
        $date = new \DateTime();
        $month = $date->format('m');
        $day = $date->format('d');
        $year = $date->format('y');

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
        $date = $domMyValues->ownerDocument->createElement('date');

        $company->appendChild($domMyValues->ownerDocument->createElement('name', $companyName));
        $company->appendChild($domMyValues->ownerDocument->createElement('location', $companyLocation));

        $date->appendChild($domMyValues->ownerDocument->createElement('day', $day));
        $date->appendChild($domMyValues->ownerDocument->createElement('month', $month));
        $date->appendChild($domMyValues->ownerDocument->createElement('year', $year));

        $exp->appendChild($domMyValues->ownerDocument->createElement('noYrs', $yearsOfExperience));
        $exp->appendChild($domMyValues->ownerDocument->createElement('skills', $skill));
        $exp->appendChild($domMyValues->ownerDocument->createElement('title', $title));

        $exps = $domMyValues->ownerDocument->createElement('experiences');
        $exps->appendChild($exp);

        $range->appendChild($domMyValues->ownerDocument->createElement('min', $hireRangeMin));
        $range->appendChild($domMyValues->ownerDocument->createElement('max', $hireRangeMax));

        $offer->appendChild($domMyValues->ownerDocument->createElement('code', $code));
        $offer->appendChild($domMyValues->ownerDocument->createElement('name', $jobName));
        $offer->appendChild($domMyValues->ownerDocument->createElement('domain', $domain));
        $offer->appendChild($company);
        $offer->appendChild($domMyValues->ownerDocument->createElement('type', $type));
        $offer->appendChild($domMyValues->ownerDocument->createElement('department', $department));
        $offer->appendChild($exps);
        $offer->appendChild($range);
        $offer->appendChild($domMyValues->ownerDocument->createElement('nocandidates', '0'));
        $offer->appendChild($domMyValues->ownerDocument->createElement('rejected', 'false'));
        $offer->appendChild($date);

        $elements = $xml->xpath('//offers');
        $refNode = dom_import_simplexml($elements[0]->offer[0]);


        $domMyValues->insertBefore($offer, $refNode);
        $doc = dom_import_simplexml($xml)->ownerDocument;
        $doc->preserveWhiteSpace = false;
        $doc->formatOutput = true;
        $doc->loadXML($xml->asXML());

        $offerObj = simplexml_import_dom($offer);

        $session = $request->getSession();
        $session->set('offer', $code);

        $doc->save($path);

        return $this->render('offer.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'offer' => $offerObj,
        ]);
    }

    public function monthlyRange($allJobsArray){
        $newArrayJobs = [];

        foreach($allJobsArray as $obj)
        {
            if(!empty( $obj->hiringRange))
            {
                $obj->monthlyrange = (int)(((int)$obj->hiringRange->min/12)+((int)$obj->hiringRange->max/12))/2;
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
