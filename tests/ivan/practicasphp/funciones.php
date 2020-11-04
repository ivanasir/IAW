<?php 
    function openhtml(){
      echo "<p>"."html"."</p>";
    }

    function closehtml(){
       echo "<p>"."/html"."</p>";
    }

    function openhead(){
        echo "<"."head".">";
    }

    function closehead(){
      echo "</head>";
    }
  
    function opentitle(){
    echo "<p>"."title"."</p>";
    }
    function closetitle(){
     echo "<p>"."/title"."</p>";
    }
    function openbody(){
      echo "<p>"."body"."</p>";
    }
    function closebody(){
      echo "<p>"."/body"."</p>";
    }
    function say(){
      echo "hola";
    }
    openhtml();
    openhead();
    opentitle();
    say();
    closetitle();
    closehead();
    closehtml();
?>