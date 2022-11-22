<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio</title>
</head>
<body>
    <h1 style="text-align:center; ">Good Afternoon sir</h1>
    <?php
    class Portfolio {
      private $name;
      private $year;
      private $dept;
      private $aboutMe;
      public $skills = array();
      public $setSkills = array('Python', 'C', 'C++', 'HTML5', 'CSS3', 'Bootstrap', 'JS', 'IOT','OOP Concepts', 'Functional Programming', 'Embedded Systems');
      private $interests = array();
      private $setInterests = array('Web Development', 'Software Development', 'IOT', 'Backend Development', 'Cloud Computing');
      private $github;
      public $skillLength = 11;
      public $interestLength = 5;

      function set_Skills(){
        for ($i=0; $i < $this->skillLength; $i++) { 
          $this->skills[$i] = $this->setSkills[$i];
        }
      }
      
      function set_Interests(){
        for ($i=0; $i < $this->interestLength; $i++) { 
          $this->interests[$i] = $this->setInterests[$i];
        }
      }

      function __construct(){
        $this->name = 'Krishna V';
        $this->year = '2nd Year';
        $this->dept = 'Electronics and Computer Engineering';
        $this->aboutMe = "I am a dedicated, organized and methodical individual. I have good interpersonal skills, 
        am an excellent team worker and am keen and very willing to learn and develop new skills. 
        I am reliable and dependable and often seek new responsibilities within a wide range of employment areas. 
        I have an active and dynamic approach to work and getting things done. I am determined and decisive. 
        I identify and develop opportunities."; 
        $this->github = "https://github.com/KriSh82432";
        $this->set_Skills();
        $this->set_Interests();
      }

      
      function display(){
        echo "Name:         $this->name <br>";
        echo "Year of Study:$this->year <br>";
        echo "Course:       $this->dept <br>";
        echo "About Me:     $this->aboutMe <br>";
        echo "Skills:       ";
        foreach($this->skills as $value){
          echo "$value, ";
        }
        echo "<br>Interests:    ";
        foreach ($this->interests as $value) {
          echo "$value, ";
        }
        echo "<br>Github Profile: $this->github";
      }
    }

    $krishna = new Portfolio();
    echo $krishna->display();
?>
</body>
</html>