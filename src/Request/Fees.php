<?php


namespace LMS\Request;


class Fees implements FeesRequestInterface {

  private $username;
  private $password;

  public function __construct($username, $password) {
    $this->username = $username;
    $this->password = $password;
  }

  /**
   * @inheritDoc
   */
  public function getUri() {
    return 'patron/fees';
  }

  /**
   * @inheritDoc
   */
  public function getParameters() {
    return [
      'user' => $this->username,
      'pin' => $this->password
    ];
  }

  public function getData() {
    return [];
  }

  /**
   * @inheritDoc
   */
  public function parseResult(array $rawData) {
    // TODO: Implement parseResult() method.
  }

}
