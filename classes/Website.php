<?php

declare(strict_types=1);

namespace webSite;

abstract class Template
{
    abstract function regex_comment_id(string $url);
}

class Website extends Template
{
    public function regex_comment_id(string $url): ?string
    {
        $regex_rule = '/&comment-(.*)/m';

        preg_match_all($regex_rule, $url, $matches, PREG_SET_ORDER, 0);
        if ($matches) {
            return $matches[0][1];
        }
        return null;
    }

    public function check_countable($var)
    {
        return is_countable($var);
    }

    public function get_last_role($arr)
    {
        return array_key_last($arr);
    }

    public function get_first_role($arr)
    {
        return array_key_first($arr);
    }

    public function create_pass_user(): array
    {
        return array(
            'pass' => password_hash('rasmuslerdorf', PASSWORD_ARGON2I),
            'user' => 'admin'
        );
    }

    public function create_new_user(): ?string
    {
        if ($this->create_pass_user()) {
            return $this->create_pass_user()["user"] ?? 'User is not created!';
        }
        return null;
    }
}