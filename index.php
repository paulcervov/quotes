<?php

$quotes = [
    'Война была бы пикником, если бы не вши и дизентерия.',
    'Нам говорят, что война — это убийство. Нет: это самоубийство.',
    'Пролог XX века — пороховой завод. Эпилог — барак Красного Креста.',
    'Война — это по большей части каталог грубых ошибок.',
    'От солдата требуется прежде всего выносливость и терпение; храбрость — дело второе.',
    'Солдат — последнее звено в эволюции животного мира.',
    'Война — это серия катастроф, ведущих к победе.',
    'В войне не бывает второго приза для проигравших.',
    'Нельзя стать хорошим солдатом без некоторZой доли глупости.'
];

$randomQuoteKey = array_rand($quotes, 1);
$randomQuote = $quotes[$randomQuoteKey];

echo $randomQuote . PHP_EOL;