<?php
/**
 * Created by PhpStorm.
 * User: ZenSide
 * Date: 04/02/15
 * Time: 11:14
 */

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class RoomAdmin extends Admin
{
    /**
     * {@inheritdoc}
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('width')->add('length')->add('height')

            ->add('furnitures', 'sonata_type_model',
                array('expanded' => false,
                    'multiple' => true,
                    'btn_add' => 'Ajouter'));
    }

}