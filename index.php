<?php
	$paginas = ['home'=>'Minha pagina home aqui','sobre'=>'Estou na página sobre','contato'=>'<form><input type="text" 
    	placeholder="Seu nome..." /></form>','FAQ'=>'Perguntas frequentes','loja'=>'conteúdo loja',
    	'Sobre'=>'Site em desenvolvimento por @gaabrieloliver'];
	?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Dinâmico</title>
    
    <!--================= ESTILO DO SITE ============-->
    <style type="text/css">
        *{  
            text-align: center;
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }

        header{
            background-color: blueviolet;
            padding: 8px 10px;
            text-align: center;
        }

        a{
            display: inline-block;
            margin: 0 10px;
            color: white;
            font-size: 17px;
        }

        section {
            max-width: 960px;
            margin: 20px auto;
            padding: 0 2%;
        }

        h2{
            background-color: blueviolet;
            color: white;
            padding: 8px 10px;

        }
        
        p {
            color: black;
            margin-top: 10px;
            font-size: 16px;

        }
    </style>
<!-- ========================================================= -->

</head>
<body>
	
    <header>
	    <?php
		foreach ($paginas as $key => $value){
            echo '<a href="?page='.$key.'">'.ucfirst($key).'</a>';
        }
        ?>
    </header>
    <section>
        <h2>
            <?php

            //Se existir o meu $_GET['page'] o meu valor vai ser o $_GET['page'], se nao vai ser 'home'; 
            $pagina = (isset($_GET['page']) ? $_GET['page'] : 'home');
            
            if(!array_key_exists($pagina,$paginas)){ //se não tiver (!) essa chave, eu vou dizer que $paginas é = a 'home'
                $paginas = 'home';

            }

            echo ucfirst($pagina);
            
            ?></h2>
            <p>
                <?php echo $paginas[$pagina]; ?></p>
    </section>    
</body>
</html>
