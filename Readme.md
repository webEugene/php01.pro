
# Website Framework
# Overview

Website framework easy to use and manipulate.
# Features
Dillinger is a cloud-enabled, mobile-ready, offline-storage, AngularJS powered HTML5 Markdown editor.
  - Parsing ID of the comment from the url
  - Check countable array
  - Get last role (user name)
  - Get first role (user name)
  - Create password for user
  - Create user
 
### Website Framework Installation

Website Framework Installation requires [Composer] (https://getcomposer.org/) to run.

```sh
$ composer require eugene/php01.pro
```
## Methods

### Parsing ID of the comment from the url
#### Example: 
```sh
$url_comment = 'http://test.site/post-1/?get=name&comment-220';
echo $Website->regex_comment_id($url_comment);
```

### Check countable array
#### Example: 
```sh
echo $Website->check_countable(['1,1,1']);
```

### Get last role (user name)
#### Example: 
```sh
$arr_roles = ['admin' => '1', 'user' => '2', 'manager' => '3'];
echo $Website->get_last_role( $arr_roles );
```

### Get first role (user name)
#### Example: 
```sh
$arr_roles = ['admin' => '1', 'user' => '2', 'manager' => '3'];
echo $Website->get_first_role( $arr_roles );
```

### Create password for user
#### Example:
```sh
echo $Website->create_pass_user()['pass'];
```

### Create user
#### Example:
```sh
echo $Website->create_new_user();
```



