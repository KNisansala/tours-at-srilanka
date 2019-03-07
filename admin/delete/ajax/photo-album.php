<?php

include_once(dirname(__FILE__) . '/../../../class/include.php');
include_once(dirname(__FILE__) . '/../../auth.php');

if ($_POST['option'] == 'delete') {

    $PHOTO_ALBUM = new PhotoAlbum($_POST['id']);
   
//    unlink('../../../upload/photo-album/thumb/' . $PHOTO_ALBUM->image_name);
// unlink('../../../upload/photo-album/' . $PHOTO_ALBUM->image_name);

    $result = $PHOTO_ALBUM->delete();

    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}