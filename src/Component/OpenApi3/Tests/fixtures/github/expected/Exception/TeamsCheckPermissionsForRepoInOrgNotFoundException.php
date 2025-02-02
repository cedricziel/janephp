<?php

namespace Github\Exception;

class TeamsCheckPermissionsForRepoInOrgNotFoundException extends NotFoundException
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('Response if team does not have permission for the repository');
        $this->response = $response;
    }
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}