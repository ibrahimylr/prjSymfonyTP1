<?php


namespace App\EventListener;


use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Events;
use Symfony\Component\String\Slugger\SluggerInterface;

class LessonListener implements EventSubscriber
{
    private $slug;

    public function __construct(SluggerInterface $slugger)
    {
        $this->slug = $slugger;
    }

    public function getSubscribedEvents()
    {
        return [
            Events::prePersist,
            Events::preUpdate
        ];
    }

    public function prePersist(LifecycleEventArgs $args)
    {

    }

    public function preUpdate(LifecycleEventArgs $args)
    {

    }

    public function slug()
    {

    }
}