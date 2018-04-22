<?php

class Comments extends CI_Controller{

  public function create($post_id){
    $slug = $this->input->post('slug');
    $this->load->model('post_model');
    $data['post'] = $this->post_model->get_posts($slug);

    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('body', 'Body', 'required');

    if ($this->form_validation->run() == false) {

      $this->load->view('templates/header');
      $this->load->view('posts/view', $data);
      $this->load->view('templates/footer');

    }

    else {
      $this->load->model('comment_model');
      $this->comment_model->create_comment($post_id);
      redirect('index.php/posts/' . $slug);
    }
  }
}
 ?>