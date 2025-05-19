<?php

namespace Application\Lib;

class Validator
{
  private array $_errors = [];
  private array $_data = [];

  public function __construct(array $dataPara)
  {
    $this->_data = $this->sanitize($dataPara);
  }

  private function sanitize(array $data): array
  {
    $sanitized = [];
    foreach ($data as $key => $string) {
      if (is_string($string)) {
        $string = htmlspecialchars(string: $string);
        $string = trim(string: $string);
        $string = stripslashes(string: $string);
        $sanitized[$key] = $string;
      } else {
        $sanitized[$key] = $string; // Conserve les valeurs non-string
      }
    }
    return $sanitized;
  }

  public function require(string $value): self
  {
    if (empty($this->_data[$value])) {
      $this->_errors[$value][] = 'Le champ est requis.';
    }
    return $this;
  }

  private function checkValue(string $value): mixed
  {
    return $this->_data[$value] ?? null;
  }

  public function isPhone(string $value): self
  {
    $data = $this->checkValue($value);

    if (!$data || !preg_match('/([0-9]{2}[ |-]?){5}/', $data)) {
      $this->_errors[$value][] = 'Le numéro de téléphone est invalide.';
    }
    return $this;
  }

  public function isDate(string $value): self
  {
    $data = $this->checkValue($value);

    if (!$data || !preg_match('/^(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2]\d|3[0-1])$/', $data)) {
      $this->_errors[$value][] = 'La date est invalide.';
    }
    return $this;
  }

  public function isEmail(string $value): self
  {
    $data = $this->checkValue($value);

    if (!$data || !preg_match('/(^[a-zA-Z0-9_.]+[@]{1}[a-z0-9]+[\.][a-z]{2,}+$)/m', $data)) {
      $this->_errors[$value][] = 'L\'email est invalide.';
    }
    return $this;
  }

  public function isText(string $value): self
  {
    $data = $this->checkValue($value);

    if (!$data || !preg_match('/^[\p{L}]+(?:[-\'\s][\p{L}]+)*$/ui', $data)) {
      $this->_errors[$value][] = 'Le texte est invalide.';
    }
    return $this;
  }

  public function isCheck(string $value): self
  {
    $data = $this->checkValue($value);

    if (!isset($data) || $data !== 'on') {
      $this->_errors[$value][] = 'Le champ doit être coché.';
    }
    return $this;
  }

  public function isNumber(string $value): self
  {
    $data = $this->checkValue($value);

    if (!$data || !preg_match('/([0-9]{1})/', $data)) {
      $this->_errors[$value][] = 'Le nombre est invalide.';
    }
    return $this;
  }

  public function isPassword(string $value): self
  {
    $data = $this->checkValue($value);

    if (!$data || !preg_match('/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[^\w\d\s:])([^\s]){8,16}$/', $data)) {
      $this->_errors[$value][] = 'Le mot de passe doit contenir entre 8 et 16 caractères, majuscules, minuscules, chiffres, et caractères spéciaux.';
    }
    return $this;
  }

  public function getErrors(): array
  {
    return $this->_errors;
  }

  public function getData(): array
  {
    return $this->_data;
  }

  public function isValid(): bool
  {
    return empty($this->_errors);
  }
}
