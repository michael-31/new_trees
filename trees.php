<?php
header("Access-Control-Allow-Origin: *");

$trees = array(
    array(
        "id" => 1,
        "name" => "Oak",
        "type" => "Deciduous",
        "height" => "80 feet",
        "location" => "North America",
        "description" => "Known for its beautiful red leaves in the fall."
    ),
    array(
        "id" => 2,
        "name" => "Maple",
        "type" => "Evergreen",
        "height" => "300 feet",
        "location" => "North America",
        "description" => "A popular Christmas tree due to its dense branches."
    ),
    array(
        "id" => 3,
        "name" => "Pine",
        "type" => "Deciduous",
        "height" => "82 feet",
        "location" => "Africa",
        "description" => "Known for its large trunk and ability to store water."
    ),
    array(
        "id" => 4,
        "name" => "Cherry Blossom",
        "type" => "Evergreen",
        "height" => "98 feet",
        "location" => "India",
        "description" => "A fig tree with aerial roots that grow into secondary trunks."
    ),
    array(
        "id" => 5,
        "name" => "Redwood",
        "type" => "Deciduous",
        "height" => "26 feet",
        "location" => "Japan",
        "description" => "Known for its beautiful pink flowers in the spring."
    )
);

echo json_encode($trees);
?>