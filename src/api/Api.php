<?php

namespace phpdk\jenkinsApi\api;

use GuzzleHttp\Client;
use phpDk\jenkinsApi\User;
use phpdk\net\Url;
use phpdk\org\json\JSON;

class Api
{
    /** @var  Url */
    protected $url;
    /**
     * @var User
     */
    private $user;

    /**
     * Connect constructor.
     * @param Url $url
     * @param User $user
     */
    public function __construct(Url $url, User $user)
    {
        $this->url = $url;
        $this->user = $user;
    }

    public function execute(string $url, array $params = []): array
    {
        $client = new Client();

        $scheme = $this->url->getScheme();
        $identity = $this->user->getIdentity();
        $host = $this->url->getHost();
        $port = $this->url->getPort() ?: 80;

        $url = "$scheme://$identity@$host:$port$url?". http_build_query($params);

        $list = $client->get($url, []);
        return JSON::decode($list->getBody()->getContents(), true);
    }

    public function apiJson(): array
    {
        return $this->execute('/api/json', ['depth' => 1]);
    }


}