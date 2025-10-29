<?php
include './functions.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['note'])) {
    saveNote($_POST['note']);
}
$notes = getNotes();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Note App</title>
</head>
<body>
    <h1>Welcome In Notes App</h1>
    <form action="index.php" method="post">
        <textarea name="note" placeholder="Write your note here" required></textarea>
        <input type="submit" value="Add Note">
    </form>
    <h2>Your Notes:</h2>
    <?php if(!empty($notes)):?>
        <ul>
            <?php foreach ($notes as $note): ?>
                <li><?php echo ($note['content']); ?></li>
                <a href="delete.php?id=<?php echo $note['id']; ?>">Delete</a>
                <a href="edit.php?id=<?php echo $note['id']; ?>">Edit</a>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No notes available.</p>
    <?php endif; ?>
</body>
</html>