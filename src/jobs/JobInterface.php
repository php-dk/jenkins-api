<?php

namespace phpdk\jenkinsApi\jobs;


interface JobInterface
{
    public function getName(): string;

    public function start();

    public function stop();

    public function isStart(): bool;
}