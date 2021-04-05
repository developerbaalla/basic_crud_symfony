<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Customer;

class CustomerFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        for ($i = 0; $i < 50; $i++) {
            $customer = new Customer();
            $customer->setFirstName( sprintf("FirstName%d", $i) );
            $customer->setLastName( sprintf("LastName%d", $i) );
            $customer->setEmail( sprintf("Email%d", $i) );
            $customer->setPhone( sprintf("06162532%02d", $i) );
            $manager->persist( $customer );
        }

        $manager->flush();
    }
}
