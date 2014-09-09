<?php

namespace Rottenwood\VacancyBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * TranslationRepository
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TranslationRepository extends EntityRepository {

    /**
     * Find all translations by list of vacancies
     * @param $vacancies
     * @param $language
     * @return array
     */
    public function findTranslations($vacancies, $language) {
        $query = $this->getEntityManager()
            ->createQuery('SELECT t FROM RottenwoodVacancyBundle:Translation t WHERE t.language = :language AND t.vacancy IN ( :vacancy )');
        $query->setParameter('vacancy', $vacancies);
        $query->setParameter('language', $language);
        $result = $query->getResult();

        return $result;
    }
}
