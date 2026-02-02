<?php

$text="";
$wordCount = 0;
$charCount = 0;

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $text=trim($_POST['text']);

    if(!empty($text)){
        // Count characters (including spaces)
        $charCount=strlen($text);

        //count words
        $words = preg_split('/\s+/', $text);
        $wordCount = count($words);

    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Word Counter</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f1f5f9;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .counter-container {
            background: #ffffff;
            width: 450px;
            padding: 25px 30px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #2563eb;
            margin-bottom: 10px;
        }

        p {
            text-align: center;
            color: #555;
            margin-bottom: 20px;
            font-size: 14px;
        }

        textarea {
            width: 100%;
            height: 150px;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            resize: none;
            font-size: 14px;
        }

        button {
            width: 100%;
            margin-top: 15px;
            background: #2563eb;
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #1e40af;
        }

        .result {
            margin-top: 20px;
            background: #f8fafc;
            padding: 15px;
            border-radius: 6px;
        }

        .result p {
            text-align: left;
            color: #333;
            margin-bottom: 5px;
            font-size: 14px;
        }
    </style>
</head>

<body>

<div class="counter-container">
    <h2>Word Counter</h2>
    <p>Enter your text below to count words and characters</p>

    <form method="POST">
        <textarea name="text" placeholder="Type or paste your text here..."><?php echo htmlspecialchars($text); ?></textarea>

        <button type="submit">Count Words</button>
    </form>

    <div class="result">
        <p><strong>Total Words:</strong> <?php echo $wordCount; ?></p>
        <p><strong>Total Characters:</strong> <?php echo $charCount; ?></p>
    </div>
</div>

</body>
</html>
