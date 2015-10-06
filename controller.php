<?php

require_once("view.php");
require_once("model.php");

class Controller
{
    public function DoStuff()
    {
        if (isset($_GET["lang"]))
            $lang = $_GET["lang"];
        else
            $lang = "en";
        
        if (file_exists("$lang.ini"))
            Strings::LoadLanguageFile("$lang.ini");
        else
            Strings::LoadLanguageFile("en.ini");
        
        
        $view = new View();
        $model = new Model();
        
        if ($view->IsLoginHappening())
        {
            $messageid = $model->TryLogin($view->GetUserData());
            $message = Strings::Get(Strings::SECTION_LOGIN,$messageid);
            $view->SetMessage($message);
            
        }
        
        $view->Render();
    }
}

?>