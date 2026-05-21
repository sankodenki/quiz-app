<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <script src="Questions.js" defer></script>
    <title>問題<?php echo $id; ?> | Quiz</title>
</head>
<body>
    <div id="main">
        <h1>Quiz</h1>
        <div class="section">
            <h2>問題<?php echo $id; ?></h2>
            <p>
                <?php echo $question; ?>
            </p>
            <h3>選択肢</h3>
            <ol class="answers" data-id="<?php echo $id; ?>">
                <?php foreach($answers as $key => $value): ?>
                <li data-answer="<?php echo $key; ?>"><?php echo $value; ?></li>
                <?php endforeach; ?>

            </ol>
        </div>
        <div id="section-correct-answer" class="section">
            <h2>答え</h2>
            <p>
                <span id="correct-answer"></span><br>
                <span id="explanation"></span>
            </p>
        </div>
        
        <div class="section">
            <a href="index.php">戻る</a>
        </div>

    </div>
</body>
</html>