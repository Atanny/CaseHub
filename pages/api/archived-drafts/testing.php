<?php
$cards = [
    [
        'title' => 'Card 1',
        'description' => 'This is the first card.',
        'image' => 'images/card1.jpg'
    ],
    [
        'title' => 'Card 2',
        'description' => 'This is the second card.',
        'image' => 'images/card2.jpg'
    ],
    [
        'title' => 'Card 3',
        'description' => 'This is the third card.',
        'image' => 'images/card3.jpg'
    ]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Card Loop</title>
    <style>
        .container {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .card {
            width: 250px;
            border: 1px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .card-body {
            padding: 15px;
        }

        .card-title {
            margin: 0 0 10px;
            font-size: 20px;
        }

        .card-text {
            color: #666;
        }
    </style>
</head>
<body>

<div class="container">
    <?php foreach ($cards as $card): ?>
        <div class="card">
            <img src="<?= htmlspecialchars($card['image']) ?>" alt="<?= htmlspecialchars($card['title']) ?>">
            <div class="card-body">
                <h3 class="card-title"><?= htmlspecialchars($card['title']) ?></h3>
                <p class="card-text"><?= htmlspecialchars($card['description']) ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>

</body>
</html>