<?php

namespace app\models;

class User
{
    private int $id;
    private string $name;
    private string $email;
    private string $gender;
    private string $status;

    public function __construct(string $name = '',string $email = '',string $gender = '',string $status = '', int $id = 0 ) {
        $this->name = $name;
        $this->email = $email;
        $this->gender = $gender;
        $this->status = $status;
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param int $name
     */
    public function setName(int $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param int $email
     */
    public function setEmail(int $email): void
    {
        $this->email = $email;
    }


    /**
     * @return string
     */
    public function getGender(): string
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     */
    public function setGender(string $gender): void
    {
        $this->gender = $gender;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }
}