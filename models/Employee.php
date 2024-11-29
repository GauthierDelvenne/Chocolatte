<?php

class Employee extends BaseModel
{
    public function homepageEmployees()
    {
        return $this->get('select `employees`.`name`,`employees`.`job`,`employees`.`description`,`employees`.`img` 
                                FROM `employees` 
                                ORDER BY `employees`.`name`;'
        );
    }
}