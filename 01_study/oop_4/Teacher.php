  <?php
  
  require_once __DIR__ . '/Person.php';
  
  class Teacher extends Person
  {
      private $school_name;
  
     public function __construct($family_name, $first_name, $school_name)
    {
       parent::__construct($family_name, $first_name);
         $this->school_name = $school_name;
     }

  
  }

