<?php
include './functions.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $notes = getNotes();
    $noteToEdit = null;
    foreach ($notes as $note) {
        if ($note['id'] === $id) {
            $noteToEdit = $note;
            break;
        }
    }
    if($noteToEdit){
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['note'])) {
            editNote($id, $_POST['note']);
            header('Location: index.php');
            exit;
        }
    } else {
        header('Location: index.php');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Note</title>
</head>
<body>
    <h1>Edit Note</h1>
    <form action="edit.php?id=<?php echo $noteToEdit['id']; ?>" method="post">
        <textarea name="note" rows="4" cols="50" required><?php echo ($noteToEdit['content']); ?></textarea><br>
        <input type="submit" value="Update Note">
    </form>

    <br>
    <a href="index.php">Back to Notes</a>
</body>
</html>
