<?php
//Define our bitmask
define("ALLOW_MESSAGE",1); //In binary 0001
//Our user
class User {
private $permissionBitmask = 1; //In binary 0001

public function setPermissionBitmask($bitmask)
{
$this->permissionBitmask = $bitmask;
}

public function getPermissionBitmask()
{
return $this->permissionBitmask;
}

    public function hasRecht($recht)
    {
        if($this->permissionBitmask & $recht) {
            return true;
        }
        return false;
    }

}

$user = new User;
//Test if user can do everything
if($user->hasRecht(2))
{
echo "I can do everything!";
}