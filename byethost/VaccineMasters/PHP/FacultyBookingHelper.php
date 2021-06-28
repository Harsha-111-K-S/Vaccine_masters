<?php
   class FacultyBookingHelper
   {
       private $name;
       private $email;
       private $age;
       private $dept;
       private $firstdose;
       private $time;

       public function __construct()
       {
           if(isset($_POST['name']))
             $this->name= $_POST['name'];
             if(isset($_POST['email']))
             $this->email= $_POST['email'];  
            if(isset($_POST['age']))
             $this->age= $_POST['age'];
             if(isset($_POST['dept']))
             $this->dept= $_POST['dept']; 
             if(isset($_POST['firstdose']))
             $this->firstdose= $_POST['firstdose']; 
             if(isset($_POST['time']))
             $this->time= $_POST['time'];        
       }

       public function getName()
       {
           if(!$this->name)
             return '' ;
           else  
             return $this->name;
       }

       public function getEmail()
       {
           if(!$this->email)
             return '' ;
           else  
             return $this->email;
       }

       public function getAge()
       {
           if(!$this->age)
             return '' ;
           else  
             return $this->age;
       }

       public function isDeptSelected($par)
       {
           if(!$this->dept)
              return '';
            if($this->dept == $par)
               return 'Selected';
            else
               return '';     
       }

       public function getFirstDose()
       {
           if(!$this->firstdose)
             return '' ;
           else  
             return $this->firstdose;
       }

       public function isTimeSelected($par)
       {
           if(!$this->time)
              return '';
            if($this->time == $par)
               return 'Selected';
            else
               return '';     
       }


   }
?>   