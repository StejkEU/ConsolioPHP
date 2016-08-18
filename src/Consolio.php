<?php
namespace Consolio;
use ElephantIO\Client;
use ElephantIO\Engine\SocketIO\Version1X;


class Consolio
{
  private $login;
  private $pass;
  private $client;

  public function __construct($login, $pass)
  {
      $this->login = $login;
      $this->pass = $pass;
      $this->client = new Client(new Version1X('https://consolio.herokuapp.com'));
  }

  public function dump($value)
  {
    $this->client->initialize();
    $this->client->emit(
        'broadcast',
        [
            'action' => 'dump',
            'login' => $this->login,
            'pass' => $this->pass,
            'value' => $value
        ]
    );
    $this->client->close();
  }

}
