<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once('config.php');

$response = array();

if(isset($_GET['id']) && $_GET['id'] !== '') {
    $id = htmlentities($_GET['id']);

    $sql = "DELETE FROM tb_mhs WHERE id = $id";

    $query = mysqli_query($conn, $sql);

    if($query) {
        $response = array(
            'status' => 'Success',
            'message' => 'Data berhasil dihapus.'
        );
    } else {
        $response = array(
            'status' => 'Failed',
            'message' => 'Data gagal dihapus.'
        );
    }
} else {
    $response = array(
        'status' => 'Error',
        'message' => 'Parameter idLang tidak ditemukan.'
    );
}

http_response_code(200);

echo json_encode($response);