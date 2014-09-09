<?php

namespace Rottenwood\VacancyBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * VacancyRepository
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class VacancyRepository extends EntityRepository {

    /**
     * Find all vacancies by department
     * @param $department
     * @return array
     */
    public function findByDepartment($department) {
        $query = $this->getEntityManager()
            ->createQuery('SELECT v FROM RottenwoodVacancyBundle:Vacancy v WHERE v.department = :department');
        $query->setParameter('department', $department);
        $result = $query->getResult();

        return $result;
    }
}
