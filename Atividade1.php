<?php 
 /* 7 - Efetuar o cálculo da quantidade de litros de combustível gastos em uma viagem,
sabendo-se que o carro ___faz 12 km com um litro.___ Deverão ser fornecidos o tempo
gasto na viagem e a velocidade média. Utilizar as seguintes fórmulas: distância =
tempo * velocidade litros usados = distancia /12 
*/     
echo "<br/>Atividade 7";

$tempo = 3; //  em horas

do{      

    $vel = 80; //    KM/h
    
    $dis = $tempo * $vel;
    
    $lit = $dis /12;

    echo "<br/><br/> A Quantidade de litros de combustível gastos na viagem  ( Com o consumo de 12km por litro ) é = " . $lit . " litros.";  
    echo "<br/> A Distância  é = " . $dis. " Km";

    $tempo += 3;


}while ($tempo <= 9);

?>



<?php  
/*<br/><br/>Atividade 6 - Calcular e apresentar o valor do volume de uma lata de óleo, utilizando a fórmula: 
volume: 3.14159*r2*altura."*/

echo "<br/><br/><br/><br/>Atividade 6";
$alt = 25;

while($alt <= 29){
$raio = 3.14159;
$vol = ($raio * $raio) * $alt;
echo "<br/><br/>Raio = 3.14159";
echo "<br/>Altura = ". $alt;
echo "<br/> O Volume é =" . $vol;
$alt += 2;
}
?>

<?php
/*5. Criar um sistema que efetue o cálculo do salário líquido de um professor. Os 
dados fornecidos serão: valor da hora aula, número de aulas dadas no mês e 
percentual de desconto do INSS.*/

echo "<br/><br/><br/><br/>Atividade 5";
$aula = 80;

while($aula < 94){
$valor = 50;
$brut = $aula * $valor;
$desc = ($aula * $valor) * 0.14;
$sal = ($aula * $valor) - $desc;
echo "<br/><br/>Valor da hora aula = R$ " . $valor;
echo "<br/>Quantidade de aulas dadas no mês = " . $aula;
echo "<br/>Valor do salario bruto = R$ " . $brut;
echo "<br/>Desconto de 14% sobre o salario bruto = R$ " .$desc; 
echo "<br/><br/>O Professor receberá :  R$ " . $sal;
$aula += 7;
}
?>


<?php 
/*4. Em épocas de pouco dinheiro, os comerciantes estão procurando aumentar suas 
vendas oferecendo desconto. Desenvolver um aplicativo que possa entrar com o 
valor de um produto e imprima o novo valor tendo em vista que o desconto foi 
de 9%.*/

echo "<br/><br/><br/><br/>Atividade 4";

$ant = 59; 

while($ant < 76){

$desc = $ant * 0.09;
$atu = $ant - $desc;
echo "<br/><br/>O valor anterior = R$ " . $ant;
echo "<br/>Desconto de 9% = R$ " . $desc ;
echo "<br/>Valor atual com desconto  = R$ " .$atu; 
$ant += 8;
}

?>


<?php 
/*3. Desenvolver programa que peça ao usuário para cadastrar uma senha; na 
sequência, deve pedir ao usuário que digite duas variáveis reais, e irá calcular a 
divisão da primeira pela segunda. O programa irá pedir ao usuário que digite sua 
senha e se estiver correta ela mostra o resultado da divisão. Senão mostra uma
mensagem de erro e encerra o aplicativo.*/

echo "<br/><br/><br/><br/>Atividade 3";

$senha1 = 134679;
$var1 = 45 ;
$var2 =  72;

while($var1 <= 84){
    $senha2 = 134679;
       $div = $var1 / $var2 ;
    if($senha1 == $senha2){
    echo "<br/><br/> A divisão entre " . $var1 . " e " . $var2 . " é  =  " . $div ; 
    } else {
    echo " Erro: Senha Incorreta ! ";
    break;
    }
    $var2 -= 9;
    $var1 += 13;
    
}   
?>




<?php 

/*2. Criar um programa para cálculo do salário líquido em que três valores devem ser 
informados: a quantidade de horas trabalhadas, o salário hora e o número de 
dependentes. O programa deve mostrar os valores conforme tabela seguinte:
Informações para os Cálculos:
Salário bruto Horas trabalhadas * salário hora + (50 * número de dependentes)
Desconto INSS Se salário bruto <= 1000 INSS=salário bruto * 8.5/100
Se salário bruto > 1000 INSS=salário bruto * 9/100
Desconto IR Se salário bruto <= 500 IR=0 --------------------------------------------
Se salário bruto > 500 e <= 1000 IR=salário bruto*5/100 <-
Se salário bruto > 1000 IR=salário bruto*7/100
Salário líquido Salário bruto – INSS – IR.*/

echo "<br/><br/><br/><br/>Atividade 2";

$qthr = 220 ;
$salhr = 18;
$numdp = 3;
$multdp = $numdp * 50;


while($salhr <= 26){
$salb = $qthr * $salhr + $multdp;


if($salb <= 1000){
    $inss = $salb * (8.5 / 100);    
    
    if ($salb > 500 && $salb <= 1000){
    $ir =  $salb * (5/100);
    $sall = $salb - $inss - $ir;
    echo "<br/><br/><br> Quantidade de Horas Trabalhadas = " . $qthr;
    echo "<br/> Valor da Hora Trabalhada = " . $salhr;
    echo "<br/> Quantidade de dependentes : " . $numdp . " = R$ " . $multdp;
    echo "<br/> Salário bruto = " . $salb;
    echo "<br/><br/> Desconto INSS = " . $inss;
    echo "<br/> Desconto IR = " . $ir;
    echo "<br/><br/> Salário Líquido = R$ " . $sall;
    echo "<br/>_____________________________";
    }elseif($salb <= 500){   
    $sall = $salb - $inss;
    echo "<br/><br/><br/> Quantidade de Horas Trabalhadas = " . $qthr;
    echo "<br/> Valor da Hora Trabalhada = " . $salhr;
    echo "<br/> Quantidade de dependentes : " . $numdp . " = R$ " . $multdp;
    echo "<br/> Salário bruto = " . $salb;
    echo "<br/><br/> Desconto INSS = " . $inss;
    echo "<br/><br/> Salário Líquido = R$ " . $sall;
    echo "<br/>_____________________________";
    }

}elseif( $salb > 1000 ){
    $inss = $salb * (9 / 100);
    $ir = $salb * (7/100);
    $sall = $salb - $inss - $ir;
    echo "<br/><br/><br/> Quantidade de Horas Trabalhadas = " . $qthr;
    echo "<br/> Valor da Hora Trabalhada = " . $salhr;
    echo "<br/> Quantidade de dependentes : " . $numdp . " = R$ " . $multdp;
    echo "<br/> Salário bruto = " . $salb;
    echo "<br/><br/> Desconto INSS = " . $inss;
    echo "<br/> Desconto IR = " . $ir;
    echo "<br/><br/> Salário Líquido = R$ " . $sall;
    echo "<br/>_____________________________";
}
$salhr += 5;
}
?>   


<?php 


/* 1. Criar um programa que receba o valor de um produto e um código de aumento, 
segundo a tabela:
 codigo    ||   Porcentagem
    1               10%
    3               25%
    4               30%
    8               50%
Utilizando a estrutura switch-case, mostrar a saída o novo valor do produto depois 
de acrescida a porcentagem correspondente


*/

echo "<br/><br/><br/><br/>Atividade 1<br/><br/>";

$valprod = 220 ;
$adic = 1;
$nov;
while($adic <= 8 ){

    switch($adic){
        case 1:
        $nov = $valprod + ($valprod * 0.10);
        echo "<br/> O novo valor do produto é = R$ " . $nov; //0.10
        break;

        case 3:
        $nov = $valprod + ($valprod * 0.25);
        echo "<br/><br/> O novo valor do produto é = R$ " . $nov; //0.25
        break;

        case 4:
        $nov = $valprod + ($valprod * 0.30);
        echo "<br/><br/> O novo valor do produto é = R$ " . $nov; //0.30
        break;

        case 8:
        $nov = $valprod + ($valprod * 0.50);
        echo "<br/><br/> O novo valor do produto é = R$ " . $nov; //0.50
        break;
}
$adic ++;


}
?>
