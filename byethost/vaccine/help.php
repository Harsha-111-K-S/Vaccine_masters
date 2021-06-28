<?php
   class StudentBookingHelper
   {
       private $usn;
       private $name;
	   private $department;
       private $semester;
       private $vacdate;
       private $btime;
	   private $email_id;

       public function __construct()
       {
		   if(isset($_POST['usn']))
             $this->usn= $_POST['usn'];
           if(isset($_POST['name']))
             $this->name= $_POST['name'];
             if(isset($_POST['department']))
             $this->department= $_POST['department'];  
            if(isset($_POST['semester']))
             $this->semester= $_POST['semester'];
             if(isset($_POST['date']))
             $this->vacdate= $_POST['date']; 
		    if(isset($_POST['time']))
             $this->btime= $_POST['time'];       
             if(isset($_POST['email_id']))
             $this->email_id= $_POST['email_id']; 
                   
       }

     public function getUsn()
       {
           if(!$this->usn)
             return '' ;
           else  
             return $this->usn;
       }

       public function getName()
       {
           if(!$this->name)
             return '' ;
           else  
             return $this->name;
       }

       public function getDep()
       {
           if(!$this->department)
             return '' ;
           else  
             return $this->department;
       }

       public function getSem()
       {
           if(!$this->semester)
             return '' ;
           else  
             return $this->semester;
       }

       

       public function getFirstdosedate()
       {
           if(!$this->vacdate)
             return '' ;
           else  
             return $this->vacdate;
       }
       public function isTimeSelected($par)
       {
           if(!$this->btime)
              return '';
            if($this->btime == $par)
               return 'Selected';
            else
               return '';     
       }
	    public function getEmail()
         {
           if(!$this->email_id)
             return '' ;
           else  
             return $this->email_id;
       }


   }
?>