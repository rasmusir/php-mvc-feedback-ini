<?php

class View
{
    private $elements = array(
        "username" => "LoginView::Username",
        "password" => "LoginView::Password",
        "submit" => "LoginView::Login"
    );
    
    private $message = "";
    
    public function SetMessage($message)
    {
        $this->message = $message;
    }
    
    public function Render()
    {
        $data = new stdClass;
        $data->title = Strings::Get(Strings::SECTION_LOGIN,Strings::TITLE);
        $data->legend = Strings::Get(Strings::SECTION_LOGIN,Strings::LEGEND);
        $data->username = Strings::Get(Strings::SECTION_LOGIN,Strings::USERNAME);
        $data->password = Strings::Get(Strings::SECTION_LOGIN,Strings::PASSWORD);
        $data->button = Strings::Get(Strings::SECTION_LOGIN,Strings::SUBMIT);
        
        $data->message = $this->message;
        
        $elements = $this->elements;
        
        include("layout.php");
    }
    
    public function IsLoginHappening()
    {
        return isset($_POST[$this->elements["submit"]]);
    }
    
    public function GetUserData()
    {
        return array("username" => $_POST[$this->elements["username"]],"password" => $_POST[$this->elements["password"]]);
    }
}

?>