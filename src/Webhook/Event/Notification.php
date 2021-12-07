<?php

namespace Online4Baby\ZigZag\OrderStatus;

class WebhookNotification
{
	private $json;


	public static function fromJson(array $json): self
	{
		$result = new self;
		$result->json = $json;
		return $result;
	}


	public function withData(Data $data): self
	{
		$result = clone $this;
		$result->json['data'] = $data;
		return $result;
	}


	public function getData(): Data
	{
		return $this->json['data'];
	}


	public function toJson(): array
	{
		return $this->json;
	}


	private function __construct()
	{
	}
}
