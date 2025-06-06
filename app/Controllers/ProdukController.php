<?php
class ProdukController extends BaseController
{
    public function detail($id)
    {
        $this->load->model('Produk_model');
        $data['product'] = $this->Produk_model->get_produk($id);
        $this->load->view('product_detail', $data);
    }
}
