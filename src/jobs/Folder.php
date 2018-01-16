<?php

namespace phpdk\jenkinsApi\jobs;


class Folder extends Job
{
    public function getName(): string
    {
        return 'name';
    }

    public function getJobs(): JobCollection
    {
        return new JobCollection([]);
    }
}