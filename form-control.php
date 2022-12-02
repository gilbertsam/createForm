<?php
if(strlen($_POST['tnim']) !=12){
    echo "Input nilai salah";
   }
   else{
    echo "Nilai Benar";
   }
   
   if(isset($_POST['tnama'])==""){
    echo "data kosong";
    //Cek data jika data kosong
    }                   
    else{
    $input = $_POST['tnama'];
    $var = "/^[a-zA-Z]*$/";
    if(!preg_match($var,$input)){
        echo "Data tidak sesuai ketentuan, masukan hanya alphabet saja";
        //validasi untuk alphabetnya
    }
    //kondisi ketika data yang diinput benar
    else echo "Input kamu benar";
    }

    
    if(isset($_POST['tbelakang'])==""){
        echo "data kosong";
        //Cek data jika data kosong
    }                   
    else{
        $input = $_POST['tbelakang'];
        $var = "/^[a-zA-Z]*$/";
        if(!preg_match($var,$input)){
            echo "Data tidak sesuai ketentuan, masukan hanya alphabet saja";
            //validasi untuk alphabetnya
        }
        //kondisi ketika data yang diinput benar
        else echo "Input kamu benar";
    }
    
    if(isset($_POST['tbarang'])==""){
        echo "data kosong";
        //Cek data jika data kosong
    }                   
    else{
        $input = $_POST['tbarang'];
        $var = "/^[a-zA-Z]*$/";
        if(!preg_match($var,$input)){
            echo "Data tidak sesuai ketentuan, masukan hanya alphabet saja";
            //validasi untuk alphabetnya
        }
        //kondisi ketika data yang diinput benar
        else echo "Input kamu benar";
    }
?>