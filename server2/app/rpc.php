<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace rpc\contract\goods;

interface GoodsInterface
{
	const RPC = 'goods';

	public function get($name);
}

interface SuframeInterface
{
	const RPC = 'goods';

	/**
	 * 注册
	 * @param $data
	 * @return string
	 * @throws \Exception
	 */
	public function register($data): string;
}
