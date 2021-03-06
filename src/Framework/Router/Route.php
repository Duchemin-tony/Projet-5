<?php
namespace Framework\Router;

/**
* Class Route
* Present a matched route
*/
class Route 
{

	/**
	* @var string
	*/
	private $name;

	/**
	* @var callable
	*/
	private $callback;

	/**
	* @var array
	*/
	private $parameters;

	/**
	* Route constructor.
	* @param string $name
	* @param String|callable $callback
	* @param array $parameters
	*/
	public function __construct(string $name, $callback, array $parameters)
	{
		$this->name = $name;
		$this->callback = $callback;
		$this->parameters = $parameters;
	}

	/**
	* @return string
	*/
	public function getName(): string 
	{
		return $this->name;
	}

	/**
	* @return string|callable
	*/
	public function getCallback() 
	{
		return $this->callback;
	}

	/**
	* Retrieve the URL parameters
	* @return string[]
	*/
	public function prePersist(): array 
	{
		return $this->parameters;
	}
}