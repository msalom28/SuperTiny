<?php namespace SuperTiny\Shortener;

use SuperTiny\Exceptions\NonExistentHashException;
use SuperTiny\Repositories\LinkRepositoryInterface as LinkRepoInterface;
use SuperTiny\Utilities\UrlHasher;

class LittleService 
{
	protected $linkRepo;

	protected $urlHasher;

	public function __construct(LinkRepoInterface $linkRepo, UrlHasher $urlHasher)
	{
		$this->linkRepo = $linkRepo;

		$this->urlHasher = $urlHasher;
	}

	public function make($url)
	{
		//If the url exists in the database lets return the hash to avoid repetition inside our table		
		$link = $this->linkRepo->ByUrl($url);

		if($link) return $link->hash;

		//otherwise we need to create a hash, save it to the database and return the hash
		return $this->makeHash($url);
	}

	public function getUrlByHash($hash)
	{
		$link = $this->linkRepo->byHash($hash);

		if (! $link) throw new NonExistentHashException;

		return $link->url;
	}

	private function makeHash($url)
	{
		$hash = $this->urlHasher->make($url);

		$data = compact('url', 'hash');

		//we make an announcement that we are about to create a new link
		\Event::fire('link.creating', [$data]);

		$this->linkRepo->create($data);

		return $hash;
	}
}







 ?>