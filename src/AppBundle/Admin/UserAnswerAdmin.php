<?php
namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
 
class UserAnswerAdmin extends Admin
{
	// Fields to be shown on filter forms
	protected function configureDatagridFilters(DatagridMapper $datagridMapper)
	{
		$datagridMapper
		->add('id_qcm')
		;
	}
	
	// Fields to be shown on lists
	protected function configureListFields(ListMapper $listMapper)
	{
		$listMapper
		->addIdentifier('sendAnswer','text', array('label' => 'User'))
		->add('id_question','text', array('label' => 'Number question'))
		->add('id_answer','text', array('label' => 'Answer'))
		->add('id_qcm', 'text', array('label' => 'Qcm'))
		->add('point')
		;
	}
}