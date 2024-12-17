<?php
    include"dbcon.php";
    if (isset($_REQUEST['bSubmitStudent'])){
        $firstname=$_REQUEST['tfirstname'];
        $lastname=$_REQUEST['tlastname'];
        $email=$_REQUEST['temail'];
        $address=$_REQUEST['taddress'];
    
        echo $firstname.$lastname.$email.$address;
        $sql="INSERT INTO tbstudent
            VALUE(null,'$firstname','$lastname','$email','$address')";
        $query=$conn->query($sql);
        echo "<META HTTP-EQUIV='refresh'
                        CONTENT='3; URL=lab2-2.php'>";

    }elseif(isset($_REQUEST['bSubmitRoom'])){
        $roomname=$_REQUEST['troomname'];
        $detail=$_REQUEST['tdetail'];
        $roomtype=$_REQUEST['troomtype'];

        echo $roomname.$detail.$roomtype;
        $sql="INSERT INTO tbroom
            VALUE(null,'$roomname','$detail','$roomtype')";
        $query=$conn->query($sql);
        echo "<META HTTP-EQUIV='refresh'
                        CONTENT='3; URL=lab2-4.php'>";

    }elseif(isset($_REQUEST['bSubmitbookname'])){
        $bookname=$_REQUEST['tbookname'];
        $author=$_REQUEST['tauthor'];
        $price=$_REQUEST['tprice'];
        $stock=$_REQUEST['tstock'];
        $booktypeid=$_REQUEST['tbooktypeid'];
    
        echo $bookname.$author.$price.$stock.$booktypeid;
        $sql="INSERT INTO tbbook
            VALUE(null,'$bookname','$author','$price','$stock','$booktypeid')";
        $query=$conn->query($sql);
        echo "<META HTTP-EQUIV='refresh'
                        CONTENT='3; URL=lab2-3.php'>";

    }elseif(isset($_REQUEST['bSubmitbooktypename'])){
        $booktypename=$_REQUEST['tbooktypename'];

        echo $booktypename;
        $sql="INSERT INTO tbbooktype
            VALUE(null,'$booktypename')";
        $query=$conn->query($sql);
        echo "<META HTTP-EQUIV='refresh'
                        CONTENT='3; URL=lab2-3.php'>";
    }elseif(isset($_REQUEST['bSubmitbookname'])){
        $bookname=$_REQUEST['tbookname'];
        $author=$_REQUEST['tauthor'];
        $price=$_REQUEST['tprice'];
        $stock=$_REQUEST['tstock'];
        $booktypeid=$_REQUEST['tbooktypeid'];
    
        echo $bookname.$author.$price.$stock.$booktypeid;
        $sql="INSERT INTO tbbook
            VALUE(null,'$bookname','$author','$price','$stock','$booktypeid')";
        $query=$conn->query($sql);
        echo "<META HTTP-EQUIV='refresh'
                        CONTENT='3; URL=lab2-3.php'>";
    }elseif(isset($_REQUEST['bSubmitUser'])){
        $firstname=$_REQUEST['tName'];
        $lastname=$_REQUEST['tLastname'];
        $username=$_REQUEST['tUsername'];
        $password=$_REQUEST['tPassword'];
        $hasValuse = md5($password);
    
        echo $firstname.$lastname.$username.$password;
        $sql="INSERT INTO tduser
            VALUE(null,'$firstname','$lastname','$username','$hasValuse')";
        $query=$conn->query($sql);
        echo "<META HTTP-EQUIV='refresh'
                        CONTENT='3; URL=lab-fromregis.php'>";
                        
    }elseif(isset($_REQUEST['bSubmitlogin'])){
        $username=$_REQUEST['tusername'];
        $password = md5($_REQUEST['tpassword']);
        $sql="SELECT * FROM tduser
                WHERE username='$username'
                and password='$password'";
        $query=$conn->query($sql);
        $rs=$query->fetch_object();
        //ดึงข้อมูลตัวที่หาเจอมาเก็บที่ตัวแปร $rs
        $numrows=$query->num_rows;
        //นับจำนวนแถวที่หาเจอ จะคืนค่ากลับมาเป็น int เสมอ
        if($numrows>0){
            echo "ล็อกอินสำเร็จ" ;
        }else{
            echo"ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง" ;
        }
    }   

?>