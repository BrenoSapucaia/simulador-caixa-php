<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $saque = $_REQUEST["saque"] ?? 0;
    ?>
    <main>
        <h1>simulador de caixa</h1>
       <form action="<?=$_SERVER['PHP_SELF']; ?>" method="get">
     <label for="saque">Qual valor voce vai sacar? (R$) <sup>*</sup></label>
     <input type="number" name="saque" id="saque" step="5" required value="<?= $saque; ?>">
        <p style="font-size: 0.7em;"><sup>*</sup> Notas disponiveis: R$100, R$50, R$20, R$10 e R$5</p>
        <input type="submit" value="Sacar">
       </form>
    </main>
   
    <?php
     $resto = $saque;
    // Saque de R$100
    $tot100 = floor($resto / 100);
    $resto %= 100;
    
    // Saque de R$50
    $tot50 = floor($resto / 50);
    $resto %= 50;

    $tot20 = floor($resto / 20);
    $resto %= 20;
    
    
    // Saque de R$10
    $tot10 = floor($resto / 10);
    $resto %= 10;
    
    // Saque de R$5
    $tot5 = floor($resto / 5);
    $resto %= 5;
    
    ?>
    <section>
        <h2> Saque de R$<?= $saque; ?> Realizado</h2>
        <p>O caixa Eletrônico vai te entregar as seguintes notas: </p>
        <ul>
            <li>
                <img src="imagens/100-reais.jpg"alt="nota de 100"> x<?= $tot100; ?>
            </li>

              <li>
                  <img src="imagens/50-reais.jpg" alt="nota de 50">x<?= $tot50; ?>
              </li>
             
              <li>
                <img src="imagens/20-reais.jpg" alt="nota de 20"> x<?= $tot20; ?>
            </li>
            
            <li>
                <img src="imagens/10-reais.jpg" alt="nota de 10"> x<?= $tot10; ?>
            </li>
            
            <li>
                <img src="imagens/5-reais.jpg" alt="nota de 5"> x<?= $tot5; ?>
            
            </li>
           
        </ul>
    </section>
    
</body>
</html>