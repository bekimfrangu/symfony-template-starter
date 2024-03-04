<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movie = new Movie();
        $movie->setTitle("The dark knight");
        $movie->setDescription("This is the description of the dark knight");
        $movie->setReleaseYear(2008);
        $movie->setImagePath("https://cdn.pixabay.com/photo/2017/05/12/07/11/batman-2306280_1280.jpg");
        $movie->addActor($this->getReference("actor_1"));
        $movie->addActor($this->getReference("actor_2"));
        $manager->persist($movie);

        $movie2 = new Movie();
        $movie2->setTitle("The Avengers");
        $movie2->setDescription("This is the description of the avengers");
        $movie2->setReleaseYear(2005);
        $movie2->setImagePath("https://cdn.pixabay.com/photo/2019/05/10/18/21/thanos-4194122_1280.png");
        $movie2->addActor($this->getReference("actor_3"));
        $movie2->addActor($this->getReference("actor_4"));
        $manager->persist($movie2);

        $manager->flush();
    }
}
