<?php 
class ModelPaymentWayforpay extends Model {
	public function getMethod($address, $total) {
		$this->load->language('extension/payment/wayforpay');

		$method_data = array(
				'code'       => 'wayforpay',
				'title'      => $this->language->get('text_title'),
				'sort_order' => $this->config->get('wayforpay_sort_order'),
                'terms' => ''
			);
		return $method_data;
	}
}
