<?php

    $data = [];
    session_start();
    session_destroy();
    $data['status'] = "success";
    echo json_encode($data);
    