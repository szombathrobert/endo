<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    //

    function AddTest(Request $req){
        $Test = new Test;
        $Test->check1=$req->check1;
        $Test->check2=$req->check2;
        $Test->check3=$req->check3;
        $Test->check4=$req->check4;
        $Test->honap=$req->honap;
        $Test->megjegyzes=$req->megjegyzes;
        $Test->save();

        if(isset($_POST['send']))
        {
            $check1 = $_POST['check1'];
            $check2 = $_POST['check2'];
            $check3 = $_POST['check3'];
            $check4 = $_POST['check4'];
            $honap = $_POST['honap'];
            $megjegyzes = $_POST['megjegyzes'];

            $query = "INSERT INTO endo (check1, check2, check3, check4, honap, megjegyzes) VALUES ('$check1', '$check2', '$check3', '$check4', '$honap', '$megjegyzes')";

        }
        return redirect('dashboard');
    }
}
