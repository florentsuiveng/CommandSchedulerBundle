<?php

namespace JMose\CommandSchedulerBundle\Controller;

use Symfony\Bridge\Doctrine\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Translation\TranslatorInterface as ComponentTranslatorInterface;
use Symfony\Contracts\Translation\TranslatorInterface as ContractsTranslatorInterface;

/**
 * Class BaseController.
 *
 * @author  Julien Guyon <julienguyon@hotmail.com>
 */
abstract class BaseController extends AbstractController
{
    /**
     * @var string
     */
    private $managerName;

    /**
     * @var ManagerRegistry
     */
    private $managerRegistry;

    /**
     * @var ContractsTranslatorInterface|ComponentTranslatorInterface
     */
    protected $translator;

    /**
     * @param string $managerName
     */
    public function setManagerName($managerName)
    {
        $this->managerName = $managerName;
    }

    /**
     * @param ManagerRegistry $managerRegistry
     */
    public function setManagerRegister(ManagerRegistry $managerRegistry)
    {
        $this->managerRegistry = $managerRegistry;
    }

    /**
     * @param ContractsTranslatorInterface|ComponentTranslatorInterface $translator
     */
    public function setTranslator($translator)
    {
        $this->translator = $translator;
    }

    /**
     * @return \Doctrine\Persistence\ObjectManager
     */
    protected function getDoctrineManager()
    {
        return $this->managerRegistry->getManager($this->managerName);
    }
}
