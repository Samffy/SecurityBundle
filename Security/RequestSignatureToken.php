<?php

namespace Rezzza\SecurityBundle\Security;

use Symfony\Component\Security\Core\Authentication\Token\AbstractToken;

/**
 * RequestSignatureToken
 *
 * @author Stephane PY <py.stephane1@gmail.com>
 */
class RequestSignatureToken extends AbstractToken
{
    public $requestMethod;

    public $requestPathInfo;

    public $requestContent;

    public $requestHost;

    public $signature;

    public $signatureTime;

    /**
     * {@inheritdoc}
     */
    public function getCredentials()
    {
        return '';
    }
}
