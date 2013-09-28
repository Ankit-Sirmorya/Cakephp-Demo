<?php
class ExampleController extends AppController {
function index() {
$path = 'app/files/example.zip';
// Download app/outside_webroot_dir/example.zip
$this->response->file( $path , array('download' => true, 'name' => 'example'));
return $this->response;
}
}
?>
