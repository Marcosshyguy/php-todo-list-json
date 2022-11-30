 <?php
    // prendo file json tramite percorso e lo converto in stringa con file_get_contents
    $json_string = file_get_contents("todo.json");

    // decodifico il file convertito in stringa in un array php  con json_decode
    $todo_list = json_decode($json_string, true);

    // bisogna controllare se la chiave esiste ed è stata mandata
    if (isset($_POST["postParam"])) {
        $new_todo = $_POST["postParam"];

        $new_element = [
            'text' => $new_todo,
            'done' => false
        ];
        $todo_list[] = $new_element;

        file_put_contents("todo.json", json_encode($todo_list));
    }
    // o elseif
    if (isset($_POST["doneIndex"])) {
        $todoIndex = $_POST["doneIndex"];

        $todo_list[$todoIndex]["done"] = !$todo_list[$todoIndex]["done"];
        file_put_contents("todo.json", json_encode($todo_list));
    }
    // o elseif
    if (isset($_POST["deliteIndex"])) {
        $removeIndex = $_POST["deliteIndex"];
        array_splice($todo_list, $removeIndex, 1);
        file_put_contents("todo.json", json_encode($todo_list));
    }

    // predispongo con header il file che dovrò prendere con get ad essere covertito in linguaggio comprensibile da js con 'Content-Type: application/json
    header('Content-Type: application/json');
    // ricodifico il file che deve essere chiamato con get in file json
    echo json_encode($todo_list);
