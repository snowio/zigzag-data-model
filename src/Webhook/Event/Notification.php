<?php
namespace SnowIO\ZigZagDataModel\Webhook\Event;

use SnowIO\ZigZagDataModel\Webhook\Data;

class Notification
{
	private $json;
	private $data;

	public static function fromJson(array $json): self
	{
		$result = new self;
		$result->json = $json;
		$result->data = Data::fromJson($json['data']);
		return $result;
	}

	public function withData(Data $data): self
	{
		$result = clone $this;
		$result->data = $data;
		return $result;
	}

	public function getData(): Data
	{
		return $this->data;
	}

	public function toJson(): array
	{
	    $json = $this->json;
	    $json['data'] = $this->data->toJson();
		return $json;
	}

	private function __construct()
	{
	}
}
