<?php

namespace App\Controller;

use App\Entity\Phone;
use App\Representation\Phones;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Request\ParamFetcherInterface;
use Symfony\Component\HttpFoundation\Response;

class PhoneController extends AbstractFOSRestController
{
    /**
     * @Rest\Get("/phones", name="article_list")
     * @Rest\QueryParam(
     *     name="keyword",
     *     requirements="[a-zA-Z0-9]+",
     *     nullable=true,
     *     description="The keyword to search for."
     * )
     * @Rest\QueryParam(
     *     name="order",
     *     requirements="asc|desc",
     *     default="asc",
     *     description="Sort order (asc or desc)."
     * )
     * @Rest\QueryParam(
     *     name="limit",
     *     requirements="\d+",
     *     default="5",
     *     description="Max number of results per page."
     * )
     * @Rest\QueryParam(
     *     name="offset",
     *     requirements="\d+",
     *     default="0",
     *     description="The pagination offset."
     * )
     * @Rest\View(statusCode=Response::HTTP_OK, serializerGroups={"list"})
     */
    public function list(ParamFetcherInterface $paramFetcher)
    {
        $pager = $this->getDoctrine()
            ->getRepository(Phone::class)
            ->search(
                $paramFetcher->get('keyword'),
                $paramFetcher->get('order'),
                $paramFetcher->get('limit'),
                $paramFetcher->get('offset')
            );

        return new Phones($pager);
    }

    /**
     * @Rest\Get(
     *     path = "/phones/{id}",
     *     name = "phone_show",
     *     requirements = {"id"="\d+"}
     * )
     * @Rest\View(statusCode=Response::HTTP_OK, serializerGroups={"details"})
     */
    public function show(Phone $phone)
    {
        return $phone;
    }
}