<?php

namespace Gajdaw\AngazeBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Gajdaw\AngazeBundle\Entity\Department;
use Symfony\Component\Yaml\Yaml;

class LoadDepartment implements FixtureInterface
{
    function load(ObjectManager $manager)
    {
        $filename =
            __DIR__ .
            DIRECTORY_SEPARATOR . '..' .
            DIRECTORY_SEPARATOR . '..' .
            DIRECTORY_SEPARATOR . 'Data/department.yml';

        $yml = Yaml::parse(file_get_contents($filename));
        foreach ($yml as $item) {
            $Faculty = $manager
                ->getRepository('GajdawAngazeBundle:Faculty')
                ->findOneByName($item['faculty']);
            if (!$Faculty) {
                throw new \RuntimeException('Brak wydziału:' .$item['faculty']);
            }
            $department = new Department();
            $department->setName($item['name']);
            $department->setFaculty($Faculty);
            $manager->persist($department);
        }
        $manager->flush();

    }
}
