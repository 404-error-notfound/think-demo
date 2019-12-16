<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace rpc\contract\user;

interface HelloRpcInterface
{
	const RPC = 'user';

	/**
	 * hello 测试
	 * @param null $name
	 * @return string
	 */
	public function run($name = null);
}

interface SuframeInterface
{
	const RPC = 'user';

	/**
	 * 注册
	 * @param $data
	 * @return string
	 * @throws \Exception
	 */
	public function register($data): string;


	/**
	 * 通知更新
	 * @param $data
	 * @return bool
	 */
	public function notify($data): string;
}


namespace rpc\contract\goods;

interface GoodsInterface
{
	const RPC = 'goods';

	public function get($name);
}

interface DemoInterface
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


	/**
	 * 通知更新
	 * @param $data
	 * @return bool
	 */
	public function notify($data): string;
}


namespace rpc\contract\news;

interface NewsInterface
{
	const RPC = 'news';

	public function get($name);
}

interface SuframeInterface
{
	const RPC = 'news';

	/**
	 * 注册
	 * @param $data
	 * @return string
	 * @throws \Exception
	 */
	public function register($data): string;


	/**
	 * 通知更新
	 * @param $data
	 * @return bool
	 */
	public function notify($data): string;
}
