<?php

class Uploadpicture extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('Upload_model');
                $this->load->helper('url');
                $this->load->helper('form');
                $this->load->helper('html');
                $this->load->helper('file');
                $this->load->helper('cookie');
                $this->load->library('session');
                $this->load->library('upload');
                $this->load->library('form_validation');
                $this->load->library('image_lib');
                $this->data['status'] = "";
                //激活分析器以调试程序
                //$this->output->enable_profiler(TRUE);
        }

        public function index()
        {
                $this->load->view('Gallery/header');
                $this->load->view('Gallery/uploadpicture', array('error' => ' ' ));
                $this->load->view('Login/footer');
        }

        public function do_upload()
        {
                //$email = $_SESSION['email'];
                //$description = $this->input->post('description');
                $config['upload_path'] = './public/pictures/temp';
                $config['allowed_types'] = 'gif|png|jpg';
                $config['max_size']= 10000000;
                $config['encrypt_name']= TRUE;                                

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('file'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('Gallery/header');
                        $this->load->view('Gallery/uploadpicture', $error);
                        $this->load->view('Login/footer');
                }
                else
                {
                        //$data = array('upload_data' => $this->upload->data());
                        $fileInfo = $this->upload->data();
                        $this->data['filename'] = $fileInfo['file_name'];
                        $this->Upload_model->upload_original($this->data['filename'], $_SESSION['email']);
                        $this->edit_solutions($this->data['filename']);
                }
        }

        /*public function edit_picture()
        {
            

            
                
                if ($watermark == 1) {
                    //$this->load->view('Gallery/edit/watermark');
                    
                }
                if ($resize == 1) {
                    //$this->load->view('Gallery/edit/resize');
                    //$filename = $this->data['filename'];
                    $config['image_library'] = 'gd2';//(必须)设置图像库
                    $config['source_image'] = 'public/pictures/temp/' . $filename;//(必须)设置原始图像的名字/路径
                    $config['dynamic_output'] = FALSE;//决定新图像的生成是要写入硬盘还是动态的存在
                    $config['new_image'] = 'public/pictures/temp/' . $filename;
                    $this->data['filename'] = $config['new_image'];
                    $config['quality'] = '90%';//设置图像的品质。品质越高，图像文件越大
                    //$config['new_image'] = 'ptjsite/upload/resize004.gif';//设置图像的目标名/路径
                    $config['create_thumb'] = TRUE;//让图像处理函数产生一个预览图像(将_thumb插入文件扩展名之前)
                    $config['thumb_marker'] = '_thumb';//指定预览图像的标示。它将在被插入文件扩展名之前。例如，mypic.jpg 将会变成 mypic_thumb.jpg  
                    $config['maintain_ratio'] = TRUE;//维持比例 
                    $this->image_lib->initialize($config);
                    if (!$this->image_lib->resize()){
                            echo $this->image_lib->display_errors();
                    }else{
                            echo "success!";
                    }
                }
                if ($rotate == 1) {
                    $config['image_library'] = 'netpbm';
                    $config['library_path'] = '/usr/bin/';
                    $config['source_image'] = 'public/pictures/temp/' . $filename;
                    $config['new_image'] = 'public/pictures/temp/' . $filename;
                    $this->data['filename'] = $config['new_image'];
                    $config['rotation_angle'] = 'hor';

                    $this->image_lib->initialize($config);

                    if ( ! $this->image_lib->rotate())
                    {
                        echo $this->image_lib->display_errors();
                    }
                }
                if ($this->Upload_model->uploadpicture($email, $description, $filename)) {
                    $this->data['filename'] = 'public/pictures/temp/' . $filename;
                    $this->load->view('Gallery/edit/bigpicture',$this->data);
                    $this->load->view('Gallery/edit/success');
                    $this->load->view('Login/footer');
                } else {
                    $this->data['status'] = "Length of description should be no more than 299!";
                    $this->load->view('Gallery/header');
                    $this->load->view('Gallery/editpicture', $this->data);
                    $this->load->view('Login/footer');
                }
                    
            }else {
                $error = array('error' => "Description of picture is needed! Submission failed!");
                $this->data['status'] = "Description of picture is needed! Submission failed!";
                $this->index();
            }
        }*/


        public function edit_solutions($filename){
            $this->data['image'] = $this->Upload_model->get_picture($filename);
            /*
            $config['image_library'] = 'gd2';
            $config['source_image'] = 'public/pictures/temp' . $filename;
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = TRUE;
            $config['width']     = 1200;
            $config['height']   = 1200;

            $this->load->library('image_lib', $config);

            $this->image_lib->resize();
            */

            $this->load->view('Gallery/header');
            $this->load->view('Gallery/editpicture', $this->data);
            $this->load->view('Login/footer');
        }

        public function editing($filename){
            $watermark = $this->input->post('watermark');
            $resize = $this->input->post('resize');
            $crop = $this->input->post('crop');
            $rotate = $this->input->post('rotate');
            $description = $this->input->post('description');
            
            $email = $_SESSION['email'];
            if ($description == NULL) {
                $this->data['status'] = "Description of picture is needed!";
                $this->edit_solutions($filename);
            } else {
                if ($watermark == 1) {
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = 'public/pictures/temp/' . $filename;

                    $config['wm_text'] = 'Copyright  - ' . $email;
                    $config['wm_type'] = 'text';
                    $config['new_image'] = 'public/pictures/temp/' . $filename;
                    $this->data['filename'] = $config['new_image'];
                    $config['wm_font_size'] = '18';
                    $config['wm_font_color'] = 'ffffff';
                    $config['wm_shadow_color'] = 'FF0000';
                    $config['wm_shadow_distance'] = '3';
                    $config['wm_vrt_alignment'] = 'bottom';
                    $config['wm_hor_alignment'] = 'center';
                    $config['wm_padding'] = '5';
                  
                    $config['new_image'] = 'public/pictures/edited/' . $filename;

                    $this->image_lib->initialize($config);
                    //$this->load->library('image_lib', $config);
                    $this->image_lib->watermark();  
                } if ($crop == 1) {
                    $x = $this->input->post('a3');
                    $y = $this->input->post('a4');
                    $w = $this->input->post('a1');
                    $h = $this->input->post('a2');

                    $config['image_library'] = 'gd2';
                    $config['x_axis'] = $x;
                    $config['y_axis'] = $y;
                    $config['width'] = $w;
                    $config['height'] = $h;
                    $config['source_image'] = 'public/pictures/temp/' . $filename;
                    //$config['quality'] = 1;
                    $config['maintain_ratio'] = FALSE;
                    $config['new_image'] = 'public/pictures/edited/' . $filename;

                    $this->image_lib->initialize($config);
                    //$this->load->library('image_lib', $config);
                    if (!$this->image_lib->crop())
                    {
                        echo $this->image_lib->display_errors();
                    }

                } if ($rotate == 1) {
                    $angle = $this->input->post('b2');
                    if ($angle < 0 || $angle > 360) {
                        $this->data['status'] = "Invalid angle!";
                        $this->edit_solutions($filename);
                    }

                    $config['image_library'] = 'gd2';
                    $config['source_image'] = 'public/pictures/temp/' . $filename;
                    
                    $config['rotation_angle'] = $angle;
                    $config['new_image'] = 'public/pictures/edited/' . $filename;

                    //$this->load->library('image_lib', $config);
                    $this->image_lib->initialize($config);
                    $this->image_lib->rotate();
                    
                } if ($resize == 1) {
                    $w = $this->input->post('c1');
                    $h = $this->input->post('c2');

                    $config['image_library'] = 'gd2';
                    $config['source_image'] = 'public/pictures/temp/' . $filename;
                    
                    $config['width'] = $w;
                    $config['height'] = $h;
                    $config['maintain_ratio'] = TRUE;
                    $config['new_image'] = 'public/pictures/edited/' . $filename;

                    $this->image_lib->initialize($config);
                    $this->image_lib->resize();
                    
                } if ($watermark == 0 && $crop == 0 && $rotate == 0 && $resize == 0) {
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = 'public/pictures/temp/' . $filename;
                 
                    $config['rotation_angle'] = 0;
                    $config['new_image'] = 'public/pictures/edited/' . $filename;

                    $this->image_lib->initialize($config);
                    $this->image_lib->rotate();
                }
                
                /*
                
                */
                if($this->Upload_model->upload_edited($filename, $email, $description)){
                    $this->edited($filename);
                } else {
                    $this->data['status'] = "Length of description should be no more than 299!";
                    $this->edit_solutions($filename);
                }
                
            }
        }

        public function reediting($filename){

        }

        public function edited($filename){
            $this->data['image'] = $this->Upload_model->get_edited_picture($filename);
            $this->load->view('Gallery/header');
            $this->load->view('Gallery/edit/bigpicture',$this->data);
            $this->load->view('Gallery/edit/success');
            $this->load->view('Login/footer');
        }
}
?>