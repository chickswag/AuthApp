<?php
namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController implements UserInterface
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $name;

    /**
     * @var array
     */
    private $roles;

    /**
     * @var string
     */
    private $password;

    /**
     * @var bool
     */
    private $active;

    private function __construct(UserId $userId, string $email, string $name)
    {
        $this->id = $userId->toString();
        $this->email = $email;
        $this->name = $name;
    }

    public static function create(string $email, string $name): User
    {
        $userId = UserId::fromString(Uuid::uuid4()->toString());
        return new self($userId, $email, $name);
    }

    public function getId(): UserId
    {
        return UserId::fromString($this->id);
    }

//... getters and setters ...
}

