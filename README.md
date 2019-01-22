用于返回统一的 code

### Installation

```shell
$ composer require "shum/shum-unified-code" -vvv
```

### 注册

## config -> app.php -> providers 添加 ShuM\Unifiedcode\UnifiedcodeServiceProvider::class
## config -> app.php -> aliases 添加 'Unifiedcode' => ShuM\Unifiedcode\Facades\Unifiedcode::class,

### 使用

## int $code 返回码
## array $param 需要替换的值  例: array(':type' => 1, ':name' => 'shum')
## Unifiedcode::parsingCode($code, $param)