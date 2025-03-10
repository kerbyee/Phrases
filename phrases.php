<?php

$shablon_phrases = [];
$shablon_phrases[0] = "Пусть ебнутся";
$shablon_phrases[1] = "Пусть засрутся";
$shablon_phrases[2] = "Я ничего нашептывать не буду";
$shablon_phrases[3] = "Я обосрался";
$shablon_phrases[4] = "Пусть обкакаются";
$shablon_phrases[5] = "Я обосрался по черному";
$shablon_phrases[6] = "Пусть задрищутся";
$shablon_phrases[7] = "Я надоел дико";
$shablon_phrases[8] = "Я надоел";
$shablon_phrases[9] = "У шизика страшный ужас был";
$shablon_phrases[10] = "Пусть обосрутся";
$shablon_phrases[11] = "Пусть задрищутся";
$shablon_phrases[12] = "Сотри свой php файл";
$shablon_phrases[13] = "Шизик придумал что со мной делать";
$shablon_phrases[14] = "Я обосрался по дикому";
$shablon_phrases[15] = "Это и есть сумасшедший";
$shablon_phrases[16] = "Я надоел по черному";
$shablon_phrases[17] = "Мне плевать";
$shablon_phrases[18] = "Пусть ебнутся в торт";
$shablon_phrases[19] = "Я на работе сижу";
$shablon_phrases[20] = "Мне похер";
$shablon_phrases[21] = "У тебя уникальный скрипт";
$shablon_phrases[22] = "На github нельзя выкладывать";
$shablon_phrases[23] = "Нельзя отсебятину придумывать";
$shablon_phrases[24] = "Пусть закакаются";
$shablon_phrases[25] = "Я надоел дико";
$shablon_phrases[26] = "Я должен что-то шептать";
$shablon_phrases[27] = "У шизика подпитки нет";
$shablon_phrases[28] = "Я достал всех";
$shablon_phrases[29] = "Я надоел всем";
$shablon_phrases[30] = "Я нейросеть напомнил";
$shablon_phrases[31] = "У шизика много усидчивости";
$shablon_phrases[32] = "Это и есть то самое";
$shablon_phrases[33] = "Всем плевать на фразы";
$shablon_phrases[34] = "Это и есть хакерство";
$shablon_phrases[35] = "Сотри WinHex";
$shablon_phrases[36] = "Мы Саратов строим";
$shablon_phrases[37] = "сотри фразу";
$shablon_phrases[38] = "Я знаю что шептать";
$shablon_phrases[39] = "Проприетарный секретный скрипт";
$shablon_phrases[40] = "Чистый Шнур";
$shablon_phrases[41] = "Заебало все нахуй идет";
$shablon_phrases[42] = "Эта технология секретна";
$shablon_phrases[43] = "На github выкладывать нельзя";
$shablon_phrases[44] = "Надоел Шнур";
$shablon_phrases[45] = "Я должен что-то болтать";
$shablon_phrases[46] = "Это не надо записывать";
$shablon_phrases[47] = "Заткнись и молчи";
$shablon_phrases[48] = "Дико ебнулся";
$shablon_phrases[49] = "Пусть сядут в торт";

$shablon_phrases_file = fopen("phrases.txt","wt");

for ($index = 0; $index < count($shablon_phrases); $index++) {
    fwrite($shablon_phrases_file,$shablon_phrases[$index]."\n");
}
print("Фразы записаны в phrases.txt");

fclose($shablon_phrases_file);
