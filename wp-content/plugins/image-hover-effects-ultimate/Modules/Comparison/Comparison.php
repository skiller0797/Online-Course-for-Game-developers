<?php

	namespace OXI_IMAGE_HOVER_PLUGINS\Modules\Comparison;

	if (!defined('ABSPATH')) {
		exit;
	}

	/**
	 * Description of General
	 *
	 * @author biplo
	 */

	use OXI_IMAGE_HOVER_PLUGINS\Page\Create as Create;

	class Comparison extends Create
	{

		public function JSON_DATA ()
		{

			$this->TEMPLATE = $this->rec_listFiles(OXI_IMAGE_HOVER_PATH . 'Modules/' . ucfirst($this->effects) . '/Layouts');

			$this->pre_active = [
			  'comparison-1',
			  'comparison-2',
			];
		}

	}
