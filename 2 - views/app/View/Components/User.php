<?php

namespace App\View\Components;

use Illuminate\View\Component;

class forListUsers {

    public $id;
    public $name;
    public $password;
    public $email;

    public function __construct($id, $name, $password, $email) {
        $this->id= $id;
        $this->name= $name;
        $this->password= $password;
        $this->email= $email;
    }

}


class User extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function users() {
        $user1 = new forListUsers(1,'Messi','Inter Miami', 'messi@email.com');
        $user2 = new forListUsers(2,'Neymar','Al Hilal', 'neymar@email.com');
        $user3 = new forListUsers(3,'Suarez','Inter Miami','suarez@email.com');
        $user4 = new forListUsers(4,'iniesta','Emirates Club','iniesta@email.com');

        $users = [];
        $users[0] = $user1;
        $users[1] = $user2;
        $users[2] = $user3;
        $users[3] = $user4;

        return $users;
    }

    public function name() {
        return 'Ian';
    }

    public function nameComParametro($name) {
        return $name;
    }



    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.user');
    }
}
