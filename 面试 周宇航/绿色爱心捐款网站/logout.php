<?php
      session_start();
    header('Content-type:text/html;charset=utf-8');
    if(@$_SESSION['user'] != ''){
            session_unset();//free all session variable
            session_destroy();//销毁一个会话中的全部数据
            setcookie(session_name(),'',time()-3600);//销毁与客户端的卡号
            header('location:denglu.php?url=index.php&info=注销成功，正在跳转！');
        }else{
            header('location:denglu.php?url=index.php&info=注销失败，请稍后重试！');
        }
?>