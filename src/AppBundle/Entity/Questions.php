<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\QCMs;

/**
 * Questions
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\QuestionsRepository")
 */
class Questions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="TextQuestion", type="string", length=255)
     */
    private $textQuestion;
    
    /**
     * @ORM\ManyToOne(targetEntity="QCMs", inversedBy="id_Question")
     * @ORM\JoinColumn(name="Id_Qcm", referencedColumnName="id")
     */
    private $question_qcm;
    
    /**
     * @ORM\ManyToOne(targetEntity="Type", inversedBy="id_Type")
     * @ORM\JoinColumn(name="Id_Type", referencedColumnName="id")
     */
    private $question_qcm_type;
    
    /**
     * @ORM\ManyToOne(targetEntity="GoodAnswers", inversedBy="id_Good_Answer")
     * @ORM\JoinColumn(name="Id_Good_Answer", referencedColumnName="id")
     */
    private $question_good_answer;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set textQuestion
     *
     * @param string $textQuestion
     *
     * @return Questions
     */
    public function setTextQuestion($textQuestion)
    {
        $this->textQuestion = $textQuestion;

        return $this;
    }

    /**
     * Get textQuestion
     *
     * @return string
     */
    public function getTextQuestion()
    {
        return $this->textQuestion;
    }
    
    public function getNameQcm(){
    	$qcm = new QCMs();
    	return $qcm->getNameQcm();
    }
    
    public function setNameQcm($question_qcm){
    	$this->question_qcm = $question_qcm;
    	return $this;
    }
}

