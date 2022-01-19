<?php include_once 'config/init.php'; ?>

<?php

$job = new Job;

$template = new Template('templates/frontpage.php');

$category = isset($_GET['category']) ? $_GET['category'] : null;

if($category == 0) {
	$template->title = 'Latest Jobs';
	$template->jobs = $job->getAllJobs();
}

else
{
	$template->title = 'Jobs In '. $job->getCategory($category)->name;
	if($job->getByCategory($category) == NULL)
	{
		$template->name = 'No Jobs Found :(';
		error_reporting(0);

	}
	else
	{
	$template->jobs = $job->getByCategory($category);
	}
	
}

$template->categories = $job->getCategories();

echo $template;