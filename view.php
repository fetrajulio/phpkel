<html>
    <head>

    </head>
    <body>
        <form method="POST" action="view.php">
            <p>nom:</p>
            <input type="text" name="nom"/>
            <button type="submit">test </button>
        </form>
        <a href=""></a>
        <?php
       // include 'poo.php';
        include 'pdo.php';
        $pdo=new pdop();
        $tab=$pdo->GetAll();
        foreach($tab as $p){
            var_dump($p);
            echo '<a></a>';
        }
        $p=new Personne($_POST['nom']);
        var_dump($p);
        $pdo->Insert($p);
        /*
            $p=new Person("julio");
            var_dump($p);
            $p->suppnom();
            var_dump($p);
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                $p1=new Person($_POST['nom']);
                var_dump($p1);
              }
              $tab=array($p,$p1);
              $tab[]=new Person("vina");
             
              foreach($tab as  $i){
                var_dump($i);
              }*/


        ?>
    </body>
</html>