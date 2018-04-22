<?php

class Categories extends CI_Controller{

  public function index(){

    $data['title'] = "Categories";

    $this->load->model('category_model');

    $data['categories'] = $this->category_model->get_categories();

    $this->load->view('templates/header');
    $this->load->view('categories/index', $data);
    $this->load->view('templates/footer');
  }

  public function create(){
    $data['title'] = 'Create Category';

    $this->form_validation->set_rules('name', 'Name', 'required');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header');
      $this->load->view('categories/create', $data);
      $this->load->view('templates/footer');
    }
    else {

      $this->load->model('category_model');
      $this->category_model->create_category();
      redirect('index.php/categories');
    }

  }

  public function posts($id){

    $this->load->model('category_model');

    $data['title'] = $this->category_model->get_category($id)->name;

    $this->load->model('post_model');

    $data['posts'] = $this->post_model->get_posts_by_category($id);

    $this->load->view('templates/header');
    $this->load->view('posts/index', $data);
    $this->load->view('templates/footer');

  }
}
 ?>
