# unmarkdorn
Library for escaping all markdown symbols

```php
// Library for escaping all markdown symbols
use mirzaev\unmarkdown\unmarkdown;

var_dump(unmarkdown('*Hello!*')); // "\\*Hello\\!\\*"
```

## Installation
```bash
composer require mirzaev/unmarkdown
```


