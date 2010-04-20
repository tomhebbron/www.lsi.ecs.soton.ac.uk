<?php
require_once 'ECS/utils.php';
require_once 'ECS/People/ECS_People.php';

ECS_OpenCoreDb();

$lsi_people = ECS_People::getPeopleByFacet('lsi');

foreach ($lsi_people as $person) {
    echo '<p>';
    echo $person->renderLink();
    echo '<br/>';
    echo $person->getFullName();
    echo '<br/>';
    echo $person->getStatus();
    echo '<br/>';
    echo $person->getRoleDescription();
    echo '<br/>';
    echo $person->getGroup();
    echo '</p>';
}

