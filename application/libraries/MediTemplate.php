<?php

class MediTemplate{
    protected $_ci;

    function __construct()
    {
        $this->_ci = &get_instance();
    }

    function show($template = NULL, $data = NULL)
    {
        if($template != NULL)
        {
            // Bagian $data['head'] untuk memanggil file head.php dari folder Admin/_Template/
            // ['head'] data yang kita panggil dari file template.php dari folderAdmin/_Template/
            $data['head'] = $this->_ci->load->view('Admin/_MediTemplate/head', $data, TRUE);

            // Bagian $data['topbar'] untuk memanggil file topbar.php dari folder Admin/_Template/
            // ['topbar'] data yang kita panggil dari file template.php dari folderAdmin/_Template/
            $data['banner'] = $this->_ci->load->view('Admin/_MediTemplate/banner', $data, TRUE);


            // ['isi'] data yang kita panggil dari file content.php dari folderAdmin/_Template/
            $data['isi'] = $this->_ci->load->view($template, $data, TRUE);

            // Bagian $data['content'] untuk memanggil file content.php dari folder Admin/_Template/
            // ['content'] data yang kita panggil dari file template.php dari folderAdmin/_Template/
            $data['service'] = $this->_ci->load->view('Admin/_MediTemplate/service', $data, TRUE);

            // Bagian $data['footer'] untuk memanggil file footer.php dari folder Admin/_Template/
            // ['footer'] data yang kita panggil dari file template.php dari folderAdmin/_Template/
            $data['footer'] = $this->_ci->load->view('Admin/_MediTemplate/footer', $data, TRUE);

            // Bagian $data['template'] untuk memanggil file template.php dari folder Admin/_Template/
            // ['template'] data yang kita panggil dari file template.php dari folderAdmin/_Template/
            echo $data['meditemplate'] = $this->_ci->load->view('Admin/_MediTemplate/meditemplate', $data, TRUE);
        }
    }
}
