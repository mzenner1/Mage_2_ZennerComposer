<?php
namespace Zenner\ComposerTest\Block;

use Magento\Framework\App\Config\Storage\WriterInterface;

class Config extends \Magento\Framework\View\Element\Template
{    
	protected $configWriter;
	protected $scopeConfig;

	public function __construct(
		WriterInterface $configWriter,
		\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
		) {
		$this->configWriter = $configWriter;
		$this->scopeConfig  = $scopeConfig;
	}

	/**
	 * Gets a scope config variable.
	 *
	 * @param string $path - path to your config variable
	 * @return object - scopeConfig object
	 */
	public function getConfig($path) {
		return $this->scopeConfig->getValue($path);
	}
}