<?php
 /* $date = new DateTime('2020-01-01');
//$date->add(DateInterval::createFromDateString('1 years 2 days 5minutes 17 seconds')); Adicionar tempo
//$date->sub(DateInterval::createFromDateString('1 years 2 days 5minutes 17 seconds')); Diminuir tempo
$date->setTimezone(new DateTimeZone('America/Sao_Paulo'));
echo $date->format('d/m/Y H:i:s');*/

/* $date1 = new DateTime('2020-01-01');
$date2 = new DateTime('2020-02-15');

if($date1 > $date2) {
    echo "DATE 1 é maior que DATE 2";   
}
else {
    echo "DATE 2 é maior que DATE 1";
} */

$date1 = new DateTime('');
$date2 = new DateTime('2020-02-25');

$diff = $date1->diff($date2);// Quantidade de dias entre um item e outro
echo $diff->format('%y anos, %m meses, %d, %h horas, %i minutos, %s seconds');
?>