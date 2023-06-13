<?php

declare(strict_types = 1);

use Consistence\Doctrine\Enum\Type\BooleanEnumType;
use Consistence\Doctrine\Enum\Type\FloatEnumType;
use Consistence\Doctrine\Enum\Type\IntegerEnumType;
use Consistence\Doctrine\Enum\Type\StringEnumType;
use Doctrine\Common\Annotations\AnnotationRegistry;
use Doctrine\DBAL\Types\Type as DoctrineType;

error_reporting(E_ALL);

require __DIR__ . '/../vendor/autoload.php';

DoctrineType::addType(FloatEnumType::NAME, FloatEnumType::class);
DoctrineType::addType(IntegerEnumType::NAME, IntegerEnumType::class);
DoctrineType::addType(StringEnumType::NAME, StringEnumType::class);
DoctrineType::addType(BooleanEnumType::NAME, BooleanEnumType::class);
