<?php

namespace ByHours\TestBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use ByHours\TestBundle\Entity\AccommodationUnit;
use ByHours\TestBundle\Form\AccommodationUnitType;

/**
 * AccommodationUnit controller.
 *
 * @Route("/accommodationunit")
 */
class AccommodationUnitController extends Controller
{

    /**
     * Lists all AccommodationUnit entities.
     *
     * @Route("/", name="accommodationunit")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ByHoursTestBundle:AccommodationUnit')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new AccommodationUnit entity.
     *
     * @Route("/", name="accommodationunit_create")
     * @Method("POST")
     * @Template("ByHoursTestBundle:AccommodationUnit:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new AccommodationUnit();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('accommodationunit_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a AccommodationUnit entity.
     *
     * @param AccommodationUnit $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(AccommodationUnit $entity)
    {
        $form = $this->createForm(new AccommodationUnitType(), $entity, array(
            'action' => $this->generateUrl('accommodationunit_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new AccommodationUnit entity.
     *
     * @Route("/new", name="accommodationunit_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new AccommodationUnit();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a AccommodationUnit entity.
     *
     * @Route("/{id}", name="accommodationunit_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ByHoursTestBundle:AccommodationUnit')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AccommodationUnit entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing AccommodationUnit entity.
     *
     * @Route("/{id}/edit", name="accommodationunit_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ByHoursTestBundle:AccommodationUnit')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AccommodationUnit entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a AccommodationUnit entity.
    *
    * @param AccommodationUnit $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(AccommodationUnit $entity)
    {
        $form = $this->createForm(new AccommodationUnitType(), $entity, array(
            'action' => $this->generateUrl('accommodationunit_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing AccommodationUnit entity.
     *
     * @Route("/{id}", name="accommodationunit_update")
     * @Method("PUT")
     * @Template("ByHoursTestBundle:AccommodationUnit:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ByHoursTestBundle:AccommodationUnit')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AccommodationUnit entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('accommodationunit_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a AccommodationUnit entity.
     *
     * @Route("/{id}", name="accommodationunit_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ByHoursTestBundle:AccommodationUnit')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find AccommodationUnit entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('accommodationunit'));
    }

    /**
     * Creates a form to delete a AccommodationUnit entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('accommodationunit_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
