<?php
     class Siswa extends CI_Controller{
          function __construct(){
               parent:: __construct();
               $data = array();
          }

          function index(){
               $siswa = $this->db->get("siswa");

               $data["query"] = $siswa;
               $data["content"] = "pages/siswa_index";
               $this->load->view("template", $data);
          }

          function tambah(){
               $data["query"]= NULL;
               $data["content"]= "pages/siswa_form";
               $this->load->view("template", $data);
          }

          function hapus($id){
               $this->db->where(array('siswa_id' => $id))->delete('siswa');
               redirect ('siswa', 'refresh');

          }

          function edit($id){
               $siswa = $this->db->get_where("siswa",array('siswa_id' => $id));

               $data["query"] = $siswa;
               $data["content"] = "pages/siswa_edit";
               $this->load->view("template", $data);
          }

          function update($id){
               $data = array              
                    (
                         'nisn'=> $this->input->post('siswa_nisn'),
                         'nama_lengkap'=> $this->input->post('siswa_nama_lengkap'),
                         'minggu1'=> $this->input->post('siswa_minggu1'),
                         'minggu2'=> $this->input->post('siswa_minggu2'),
                         'minggu3'=> $this->input->post('siswa_minggu3'),
                         'minggu4'=> $this->input->post('siswa_minggu4'),
                         'bulan'=> $this->input->post('siswa_bulan'),
                         'tanggal'=> $this->input->post('siswa_tanggal')


                    );

               
               $this->db->where(array('siswa_id'=>$id))->update('siswa',$data);
               redirect ('siswa','refresh');

          }

          function simpan(){
               $data = array              
                    (
                         'Nisn'=> $this->input->post('siswa_nisn'),
                         'Nama_lengkap'=> $this->input->post('siswa_nama_lengkap'),
                         'minggu1'=> $this->input->post('siswa_minggu1'),
                         'minggu2'=> $this->input->post('siswa_minggu2'),
                         'minggu3'=> $this->input->post('siswa_minggu3'),
                         'minggu4'=> $this->input->post('siswa_minggu4'),
                         'bulan'=> $this->input->post('siswa_bulan'),
                         'tanggal'=> $this->input->post('siswa_tanggal')
  );
               $this->db->insert('siswa',$data);
               redirect ('siswa', 'refresh');



          }
     }
?>
