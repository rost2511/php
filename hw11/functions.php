<?php
/**
 * Function for writing logs to a file
 * @param string $string
 * @param string $pathToFile
 * @return void
 */
function writeLog(string $string, string $pathToFile = DIR . "logs/logs.txt"): void
{
    date_default_timezone_set("Europe/Kiev");                               // Устанавливаем таймзону, тк у пользователей на сервере может быть установлена неправильная таймзона
    $file = fopen($pathToFile, 'a+');
    if (!str_ends_with($string, "\n")) {
        $string .= "\n";
    }
    $writeFormat = "[" . date("j_n_Y, H:i:s") . "] " . $string;
    fwrite($file, $writeFormat);
    fclose($file);
}

/**
 * Function returns the latest log
 * @param string $pathToFile
 * @return string
 */
function readLastLog(string $pathToFile = DIR . "logs/logs.txt"): string
{
    $file = fopen($pathToFile, 'r');
    $allLogs = file_get_contents($pathToFile);
    fclose($file);
    return substr($allLogs, strrpos($allLogs, "["));
}
