<?php
class ViewRegister extends Register{
    public function showAllRegisters(){
        echo "<script>alert(\"You have loged in with : ".$_POST['username']."\")</script>";
        echo "<h1 style=\"color:red;\"> Welcome : ". $_POST['username']."</h1>";
    }

}