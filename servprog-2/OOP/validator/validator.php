<?php
class Validator {
    
    private $data;
    private $errors = [];
    private $fields = ['username', 'email'];

    public function __construct($formData)
    {
        $this->data = $formData;
    }
    public function validateForm() {
        
    }
    public function validateUsername() {
        //echo "<p>" . $this->data['username'] . "</p>";
        //Check if the username is between 4 and 12 letters long
        if (strlen($this->data['username']) > 3 && $this->data['username'] < 13) {
          echo "GOOD JOB!!!";
        } else {
            echo "Username needs to be between 4 and 12 letters. You currently have: " . strlen($this->data['username']) . " letters";
        }
    }
    public function validateEmail() {
        //echo "<p>" . $this->data['email'] . "</p>";
        if (strlen($this->data['email']) > 10 && $this->data['email'] < 30) {
            echo "GOOD JOB!!!";
          } else {
              echo "Email needs to be between 4 and 12 letters. You currently have: " . strlen($this->data['email']) . " letters";
          }
    }
}