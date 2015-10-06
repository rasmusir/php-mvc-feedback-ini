<?php
class Model
{
    public function __construct()
    {
        
    }
    
    public function TryLogin($userdata)
    {
        if ($userdata["username"] == "")
            return Strings::MISSING_USERNAME;
        if ($userdata["password"] == "")
            return Strings::MISSING_PASSWORD;
        if ($userdata["username"] != "admin" || $userdata["password"] != "pass")
            return Strings::BAD;
        else
            return Strings::SUCCESS;
    }
}
?>