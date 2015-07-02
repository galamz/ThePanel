<?php


namespace Ss\User;


class Reg {

    private $db;

    private $table = "user";

    function __construct(){
        global $db;
        $this->db = $db;
    }

    function GetLastPort(){
        $datas = $this->db->select($this->table,"*",[
            "ORDER" => "uid DESC",
            "LIMIT" => 1
        ]);
        return $datas['0']['port'];
    }

//Below is the original DataBase registration module by @orvice modified by @afang01
//Added table insertion to the FreeRADIUS Accounting table 'radcheck' and 'radusergroup'
//You will need to insert FreeRADIUS SQL tables into ss-panel database in order to get this work
//Credits Alex Rui-Jie Fang frjalex@gmail.com
    function Reg($username,$email,$pass,$plan,$transfer,$invite_num,$ref_by){

        $sspass = \Ss\Etc\Comm::get_random_char(8);
        $ssport = $this->GetLastPort()+rand(1,5);
        $this->db->insert($this->table,[
           "user_name" => $username,
            "email" => $email,
            "pass" => $pass,
            "passwd" =>  $sspass,
            "t" => '0',
            "u" => '0',
            "d" => '0',
            "plan" => $plan,
            "transfer_enable" => $transfer,
            "port" => $ssport,
            "invite_num" => $invite_num,
            "money" => '0',
            "#reg_date" =>  'NOW()',
            "ref_by" => $ref_by
        ]);
        //add one registered user to radcheck
        $this->db->insert(radcheck, [
            "username" => $ssport,
            "attribute" => 'Cleartext-Password',
            "op" => ':=',
            "value" => $sspass
        ]);
        //add one registered user to specific usergroup
          $this->db->insert(radusergroup, [
           "username" => $ssport,
           "groupname" => $plan,
           "priority" => '1'
        ]);

        //END OF Reg Function ReWritten by Mr. Fang;)
        //TODO:customization of priority, grouping by server
    




    }

}
