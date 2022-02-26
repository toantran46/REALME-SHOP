<?php
    session_start();
    include('config.php');

        //them
    if(isset($_GET['cong'])){
        $id = $_GET['cong'];
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['masp'] != $id){
                $product[] = array('hinhanh' => $cart_item['hinhanh'],'tensp' => $cart_item['tensp'], 'masp' => $cart_item['masp'], 'soluong' => $cart_item['soluong'], 'gia' =>$cart_item['gia']);
                $_SESSION['cart'] = $product;
            }else{
                $tangsoluong = $cart_item['soluong'] + 1;
                if($cart_item['soluong']<10){
                    $product[] = array('hinhanh' => $cart_item['hinhanh'],'tensp' => $cart_item['tensp'], 'masp' => $cart_item['masp'], 'soluong' => $tangsoluong, 'gia' =>$cart_item['gia']);
                }else{
                    $product[] = array('hinhanh' => $cart_item['hinhanh'],'tensp' => $cart_item['tensp'], 'masp' => $cart_item['masp'], 'soluong' => $cart_item['soluong'], 'gia' =>$cart_item['gia']);
                }
                $_SESSION['cart'] = $product;
            }
        
        }
        header('Location:cart.php'); 
    }
        //tru
    if(isset($_GET['tru'])){
        $id = $_GET['tru'];
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['masp'] != $id){
                $product[] = array('hinhanh' => $cart_item['hinhanh'],'tensp' => $cart_item['tensp'], 'masp' => $cart_item['masp'], 'soluong' => $cart_item['soluong'], 'gia' =>$cart_item['gia']);
                $_SESSION['cart'] = $product;
            }else{
                $tangsoluong = $cart_item['soluong'] - 1;
                if($cart_item['soluong']>1){
                    $product[] = array('hinhanh' => $cart_item['hinhanh'],'tensp' => $cart_item['tensp'], 'masp' => $cart_item['masp'], 'soluong' => $tangsoluong, 'gia' =>$cart_item['gia']);
                }else{
                    $product[] = array('hinhanh' => $cart_item['hinhanh'],'tensp' => $cart_item['tensp'], 'masp' => $cart_item['masp'], 'soluong' => $cart_item['soluong'], 'gia' =>$cart_item['gia']);
                }
                $_SESSION['cart'] = $product;
            }
        
        }
        header('Location:cart.php'); 
    }
        //xoa sp
    if(isset($_SESSION['cart']) && isset($_GET['xoacart'])){
        $id = $_GET['xoacart'];
        foreach($_SESSION['cart'] as $cart_item){

            if($cart_item['masp'] != $id){
                $product[] = array('hinhanh' => $cart_item['hinhanh'],'tensp' => $cart_item['tensp'], 'masp' => $cart_item['masp'], 'soluong' => $cart_item['soluong'],'gia' =>$cart_item['gia']);
            }

        $_SESSION['cart'] = $product;
        header("Location:cart.php");
        }
    }
    if(isset($_POST['themgiohang'])){
        //session_destroy();
        $id = $_GET['idsp'];
        $soluong = 1;
        $sql = "SELECT * FROM hanghoa WHERE MSHH='$id' LIMIT 1";
        $query = mysqli_query($mysqli, $sql);
        $row = mysqli_fetch_array($query);
        if($row){
            $new_product = array(array('hinhanh' => $row['Anh'],'tensp' => $row['TenHH'], 'masp' => $row['MSHH'], 'soluong' => $soluong, 'gia' =>$row['Gia']));
                //check session
            if(isset($_SESSION['cart'])){
                $found = false;
                foreach($_SESSION['cart'] as $cart_item){
                    //trung sp
                    if($cart_item['masp'] == $id){
                        $product[] = array('hinhanh' => $cart_item['hinhanh'],'tensp' => $cart_item['tensp'], 'masp' => $cart_item['masp'], 'soluong' => $soluong+1, 'gia' =>$cart_item['gia']);
                    $found = true;
                    //khong trung
                    }else{
                        $product[] = array('hinhanh' => $cart_item['hinhanh'],'tensp' => $cart_item['tensp'], 'masp' => $cart_item['masp'], 'soluong' => $cart_item['soluong'], 'gia' =>$cart_item['gia']);
                    }
                }
                if($found ==  false){
                    //lien ket du lieu tu product + new_product
                    $_SESSION['cart'] = array_merge($product,$new_product);
                }
                else{
                    $_SESSION['cart'] = $product;
                }
            }else{
                $_SESSION['cart'] = $new_product;
            }
        }
        header('Location:cart.php');
    }
    ?>