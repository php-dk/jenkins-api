```php

$jenkins = new Jenkins(new Url('http://jenkins.com'), new User('root', 'password'));
$jobs = $jenkins->getJobs();
// $jobs->stop();
// $jobs->start();

foreach($jobs as $job) {
     $job->start();
     $job->stop();
}

```