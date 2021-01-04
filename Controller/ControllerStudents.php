<?php


final class ControllerStudents
{
    public function defaultAction()
    {
        $S_students =  new Students();

        View::show('global/view', array('students' =>  $S_students->jsonToArray()));

    }

}