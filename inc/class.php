<?php
require 'inc/config.php';
class todo extends config{
    private $fq, $sq;
    public
    function setter(){
        $this->fq = mysqli_query($this->connect,$this->sq);
    }

    function checklogin(){
        $email = mysqli_real_escape_string($this->connect,$_POST['emailid']);
        $pass = md5($_POST['password']);
        $this->sq = "SELECT * FROM user WHERE user_emailid='$email' AND user_pass='$pass'";
        $this->setter();
        if(mysqli_num_rows($this->fq)==1){
            // $r = mysqli_fetch_array($this->fq);
            $_SESSION['user'] = $_POST['emailid'];
            header('location:index.php');    
        }else{
        header('location:login.php');
        }
    }

    function fetchname(){
        $uid = $_SESSION['user'];
        $this->sq = "SELECT * FROM user where user_emailid ='$uid'";
        $this->setter();
        $r = mysqli_fetch_array($this->fq);
        echo $r['user_name'];
    }

    function adduser(){
        $nm = $_POST['name'];
        $email = mysqli_real_escape_string($this->connect,$_POST['emailid']);
        $pass = md5($_POST['password']);
        $this->sq = "INSERT INTO `user`(`user_name`,`user_emailid`,`user_pass`) VALUES ('$nm','$email','$pass')";
        $this->setter();
    }

    function addtodo(){
        $td = ucfirst($_POST['todo']);
        $this->sq = "INSERT INTO `addtask`(`task`) VALUES ('$td')";
        $this->setter();
    }

    function fetchtodo(){
        $this->sq = "SELECT * FROM addtask";
        $this->setter();
        $cnt = 0;
        while($r = mysqli_fetch_array($this->fq)){
            $cnt = $cnt + 1;
            echo "<tr>";
            echo "<td style='font-size:20px'><form action = 'index.php' method='post' style='display:inline;margin-right:10px;'><input type='checkbox' class='chkbox' name = 'chk' value='".$r['id']."'></form><b>".$cnt."</b></td>";
            echo "<td  style='font-size:20px'>".$r['task']."</td>";
            echo "<td style='text-align:center;'> <form action = 'index.php' method='post'><input type='hidden' name = 'tdid' value='".$r['id']."'><button type='submit' class='btn btn-danger' name='delete'>Delete</button></form></td>";
            echo "</tr>";
            
            
        }
    }

    function deletetodo(){
        $id = $_POST['tdid'];
        $this->sq = "DELETE FROM addtask WHERE '$id'=id";
        $this->setter();
    }

    function edittodo(){
        
    }
}
$obj = new todo();
?>