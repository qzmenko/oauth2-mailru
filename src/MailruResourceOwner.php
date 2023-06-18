<?php

namespace Qzmenko\OAuth2\Client\Provider;

use League\OAuth2\Client\Provider\ResourceOwnerInterface;

class MailruResourceOwner implements ResourceOwnerInterface
{

    /**
     * Response
     *
     * @var array
     */
    private $response;

    /**
     * Class constructor
     *
     * @param array $response
     * @return void
     */
    public function __construct(array $response)
    {
        $this->response = $response;
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->getResponseValue('id');
    }

    /**
     * User's email address
     *
     * @return string|null
     *   Email address.
     */
    public function getEmail()
    {
        return $this->getResponseValue('email');
    }

    /**
     * User's full name.
     *
     * @return string|null
     *   Full name.
     */
    public function getName()
    {
        return $this->getResponseValue('name');
    }

    /**
     * User's first name
     *
     * @return string|null
     *   First name
     */
    public function getFirstName()
    {
        return $this->getResponseValue('first_name');
    }

    /**
     * User's last name
     *
     * @return string|null
     *   Last name.
     */
    public function getLastName()
    {
        return $this->getResponseValue('last_name');
    }

    /**
     * User's nickname
     *
     * @return string|null
     *   Nickname.
     */
    public function getNickname()
    {
        return $this->getResponseValue('nickname');
    }

    /**
     * User's profile picture url
     *
     * @return string|null
     *   Profile picture url.
     */
    public function getImageUrl()
    {
        return $this->getResponseValue('image');
    }

    /**
     * User's gender
     *
     * @return string|null
     *   Gender.
     */
    public function getGender()
    {
        return $this->getResponseValue('gender');
    }

    /**
     * User's locale
     *
     * @return string|null
     *   Locale.
     */
    public function getLocale()
    {
        return $this->getResponseValue('locale');
    }

    /**
     * User's birthday
     *
     * @return string|null
     *   Birthday.
     */
    public function getBirthday()
    {
        return $this->getResponseValue('birthday');
    }

    /**
     * {@inheritdoc}
     */
    public function toArray()
    {
        return $this->response;
    }

    /**
     * Get value by key from response.
     *
     * @param $key
     *   Key to get, e.g. 'id', 'email', etc.
     *
     * @return mixed|null
     *   Value from response or NULL if not found.
     */
    private function getResponseValue($key)
    {
        return isset($this->response[$key]) ? $this->response[$key] : NULL;
    }

}
