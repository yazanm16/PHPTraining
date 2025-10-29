<?php
define('NOTE_FILES', 'notes.txt');
function saveNote($note){
    $notes=getNotes();
    $newNote=['id'=>uniqid(),'content'=>$note];
    $notes[]=$newNote;
    file_put_contents(NOTE_FILES, json_encode($notes));

}
function getNotes(){
    if (file_exists(NOTE_FILES)) {
        $notes = file_get_contents(NOTE_FILES);
        return json_decode($notes, true);
    }
    return [];
}
function deleteNote($id){
    $notes=getNotes();
    $newNotes=[];
    foreach($notes as &$note){
        if($note['id']!==$id){
            $newNotes[]=$note;
        }
    }
    file_put_contents(NOTE_FILES, json_encode($newNotes));

}
function editNote($id,$newContent){
    $notes=getNotes();
    foreach($notes as &$note){
        if($note['id']==$id){
            $note['content']=$newContent;
            break;
        }
    }
    file_put_contents(NOTE_FILES, json_encode($notes));
}