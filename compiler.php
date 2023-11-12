<?php

$language = strtolower($_POST['language']);
$code = $_POST['code'];

// Ensure the "temp" directory exists
$tempDir = __DIR__ . "/temp";
if (!file_exists($tempDir)) {
    mkdir($tempDir, 0755, true);
}

// Generate a random file name
$random = substr(md5(mt_rand()), 0, 7);
$filePath = "$tempDir/$random.$language";

// Open the file for writing and check for errors
$programFile = fopen($filePath, "w");
if ($programFile === false) {
    die("Unable to open file for writing.");
}

// Write code to the file
fwrite($programFile, $code);
fclose($programFile);

// Execute code based on the selected language
if ($language == "php") {
    $output = shell_exec("C:\\xampp\\php\\php.exe $filePath 2>&1");
    echo $output;
} elseif ($language == "python") {
    $output = shell_exec("C:\\Users\\Awais\\AppData\\Local\\Programs\\Python\\Python311\\python.exe $filePath 2>&1");
    echo $output;
} elseif ($language == "node") {
    rename($filePath, "$filePath.js");
    $output = shell_exec("node $filePath.js 2>&1");
    echo $output;
} elseif ($language == "c" || $language == "cpp") {
    $outputExe = "$random.exe";
    $compiler = ($language == "c") ? "gcc" : "g++";

    // Compile the code
    shell_exec("$compiler $filePath -o $tempDir/$outputExe");

    // Execute the compiled code
    $output = shell_exec("$tempDir/$outputExe 2>&1");
    echo $output;
}
