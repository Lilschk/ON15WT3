<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Created by PhpStorm.
 * User: lilikovac
 * Date: 19.11.16
 * Time: 11:46
 */
class PostRepo extends EntityRepository
{

    public function findByLetters($string){
        return $this->getEntityManager()->createQuery('SELECT u FROM AppBundle:Post u  
                WHERE u.Nachricht LIKE :string OR u.Name LIKE :string')
            ->setParameter('string','%'.$string.'%')
            ->getResult();
    }


}