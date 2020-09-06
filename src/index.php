<?php

namespace App;

require __DIR__.'/../vendor/autoload.php';

use App\Entity\Author;
use Symfony\Component\Validator\Validation;

$validatorBuilder = Validation::createValidatorBuilder();
$validator = $validatorBuilder->enableAnnotationMapping()->getValidator();
$errors = $validator->validate(new Author());

// var_dump($errors);
