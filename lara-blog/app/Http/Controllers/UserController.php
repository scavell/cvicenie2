<?php


namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function showAction($id)
    {
        $user=User::find($id);
        echo $user->email."<br>";
        echo $user->meno . " " . $user->priezvisko .  "@gmail.com<br>";
        echo $user->vek."<br>";
        echo $user->updated_at;
    }
    public function insertAction()
    {
        $user = new User();
        $user->meno = "Fero";
        $user->priezvisko = "Taraba";
        $user->heslo = "xxx";
        $user->email =$user->meno . "." . $user->priezvisko . "@gmail.com";
        $user->vek = mt_rand(1, 80);
        $user->save();

    }

    public function updateAction($id)
    {
        $user=User::where("id","=",$id)->first();
        $user->update(["vek"=> mt_rand(1, 80) ]);
    }
    public function deleteAction($id)
    {
        $user=User::find($id);
        $user->delete();

    }

}
