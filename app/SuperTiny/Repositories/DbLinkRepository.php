<?php namespace SuperTiny\Repositories;

use Link;

class DbLinkRepository implements LinkRepositoryInterface
{
	public function byHash($hash)
	{
		return Link::where('hash', '=', $hash)->first();
	}

	public function byUrl($url)
	{
		return Link::where('url', '=', $url)->first();
	}

	public function create(array $data)
	{
		return Link::create($data);
	}
}



 ?>